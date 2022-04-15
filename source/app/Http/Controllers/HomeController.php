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
        $categories = Category::get()
            ->each(function ($feed) {
                $feed->load(['posts' => function($query) {
                    $query->where('status', Post::STATUS_ACTIVE)->limit(3);
                }]);
            });
        return view('home', compact('banners', 'categories'));
    }
}
