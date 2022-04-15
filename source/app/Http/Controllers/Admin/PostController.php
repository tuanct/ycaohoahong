<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Posts\CreatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy('id', 'DESC');
        foreach ($request->all() as $key => $item) {
            if (!$item) {
                continue;
            }
            switch ($key) {
                case 'title':
                    $posts = $posts->where('title', 'LIKE', '%' . $item . '%');
                    break;
                default:
                    $posts = $posts->where($key, $item);
                    break;
            }
        }
        $posts = $posts->paginate(20);
        $categories = Category::get();
        return view('admin.posts.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     */
    public function store(CreatePostRequest $request)
    {
        $path = null;
        if ($request->file('thumbnail')) {
            $path = upload($request->file('thumbnail'), 'uploads/posts');
        }
        $post = Post::create([
            'user_id' => Auth::id(),
            'title' => $request->get('title'),
            'thumbnail' => $path,
            'content' => $request->get('content'),
            'status' => $request->get('status') ? Post::STATUS_ACTIVE : Post::STATUS_INACTIVE,
            'category_id' => $request->get('category'),
            'slug' => Str::slug($request->get('title')) . '-' . Carbon::now()->timestamp
        ]);
        if (!$post) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.posts.index')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::get();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
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
        $post->category_id = $request->get('category');
        $post->status = $request->get('status') ? Post::STATUS_ACTIVE : Post::STATUS_INACTIVE;
        $post->slug = Str::slug($request->get('title')) . '-' . Carbon::now()->timestamp;
        if (!$post->save()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.posts.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!$post->delete()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }

        $filename = str_replace('/storage/uploads/', '', $post->thumbnail);
        // remove old image
        removeFileUpload($post->thumbnail);
        return redirect()->route('admin.posts.index')->with('success', 'Success');
    }
}
