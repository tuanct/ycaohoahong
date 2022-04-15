<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id', 'DESC')->paginate(20);
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sorts = (int)Banner::count() + 1;
        return view('admin.banners.create', compact('sorts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = null;
        if ($request->file('thumbnail')) {
            $path = upload($request->file('thumbnail'), 'uploads/banners');
        }
        $post = Banner::create([
            'user_id' => Auth::id(),
            'title' => $request->get('title'),
            'thumbnail' => $path,
            'content' => $request->get('content'),
            'sort' => $request->get('sort'),
            'slug' => Str::slug($request->get('title')) . '-' . Carbon::now()->timestamp
        ]);
        if (!$post) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.banners.index')->with('success', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $sorts = (int)Banner::count();
        return view('admin.banners.edit', compact('banner', 'sorts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        if ($request->file('thumbnail')) {
            if ($banner->thumbnail) {
                removeFileUpload($banner->thumbnail);
            }
            $path = upload($request->file('thumbnail'), 'uploads/posts');
            $banner->thumbnail = $path;
        }
        $newSort = $banner->sort;
        $oldSort = $request->get('sort');
        $banner->title = $request->get('title');
        $banner->content = $request->get('content');
        $banner->user_id = Auth::id();
        $banner->sort = $request->get('sort');
        $banner->slug = Str::slug($request->get('title')) . '-' . Carbon::now()->timestamp;
        $otherBanner = Banner::where('sort', $oldSort)->first();
        $otherBanner->sort = $newSort;
        if (!$banner->save() || !$otherBanner->save()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }
        return redirect()->route('admin.banners.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if (!$banner->delete()) {
            return redirect()->back()->withInput()->withErrors(__('Fail'));
        }

        $filename = str_replace('/storage/uploads/', '', $banner->thumbnail);
        // remove old image
        removeFileUpload($banner->thumbnail);
        return redirect()->route('admin.banners.index')->with('success', 'Success');
    }
}
