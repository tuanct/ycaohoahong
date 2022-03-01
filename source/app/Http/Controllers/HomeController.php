<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $banners = Post::where('category', Category::TYPE_BANNER)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderBy('id', 'DESC')
            ->limit(5)
            ->get();
        $news = Post::where('category', Category::TYPE_NEWS)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
        $posts = Post::where('category', Category::TYPE_POST)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
        return view('home', compact('banners', 'news', 'posts'));
    }
}
