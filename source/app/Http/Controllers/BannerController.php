<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show($slug)
    {
        $banner = Banner::where('slug', $slug)->firstOrFail();
        $recentBanners = Banner::where('id', '<>', $banner->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('banners.detail', compact('banner', 'recentBanners'));
    }
}
