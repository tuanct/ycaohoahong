<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('category_id', $request->category)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderBy('id', 'DESC')
            ->paginate(21)
            ->withQueryString();
        return view('posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('status', Post::STATUS_ACTIVE)->where('slug', $slug)->with('tags')->firstOrFail();
        $post->count_click = $post->count_click + 1;
        $post->save();
        $recentPosts = Post::where('id', '<>', $post->id)
            ->where('status', Post::STATUS_ACTIVE)
            ->where('category_id', $post->category_id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('posts.detail', compact('post', 'recentPosts'));
    }
}
