<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\CreatePostRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    protected mixed $category;

    public function __construct(Request $request)
    {
        $this->category = $request->category;
        if (!$this->category) {
            redirect()->route('admin.dashboard')->send();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        $posts = Post::where('category', $category)->orderBy('id', 'DESC')->paginate(20);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category)
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     */
    public function store($category, CreatePostRequest $request)
    {
        if ($request->file('thumbnail')) {
            $path = upload($request->file('thumbnail'), 'uploads/posts');
        }
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->get('title'),
            'thumbnail' => $path,
            'content' => $request->get('content'),
            'status' => $request->get('status') ? Post::STATUS_ACTIVE : Post::STATUS_INACTIVE,
            'category' => $category,
            'slug' => Str::slug($request->get('title')) . Carbon::now()->timestamp
        ]);
        if (!$post) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.posts.index', ['category' => $category])->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($category, Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit($category, Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update($category, Request $request, Post $post)
    {
        if ($request->file('thumbnail')) {
            if ($post->thumbnail) {
                removeFileUpload($post->thumbnail);
            }
            $path = upload($request->file('thumbnail'), 'uploads/posts');
            $post->thumbnail = $path;
        }
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::id();
        $post->status = $request->get('status') ? Post::STATUS_ACTIVE : Post::STATUS_INACTIVE;
        $post->slug = Str::slug($request->get('title')) . Carbon::now()->timestamp;
        if (!$post->save()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.posts.index', ['category' => $category])->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($category, Post $post)
    {
        if (!$post->delete()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }

        $filename = str_replace('/storage/uploads/', '', $post->thumbnail);
        // remove old image
        removeFileUpload($post->thumbnail);
        return redirect()->route('admin.posts.index', ['category' => $category])->with('success', 'Success');
    }
}
