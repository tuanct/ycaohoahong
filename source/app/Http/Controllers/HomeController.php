<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $banners = Banner::orderBy('sort', 'ASC')->get();
        $categories = Category::with(['posts' => function($query) {
            $query->where('status', Post::STATUS_ACTIVE)->limit(3);
    }])->get();
        return view('home',
            compact('banners', 'categories'));
    }
}
