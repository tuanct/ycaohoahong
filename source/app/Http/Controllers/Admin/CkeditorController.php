<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    public function __construct()
    {
    }

    public function uploadImage(Request $request): JsonResponse
    {
        $path = upload($request->file('upload'), 'uploads/ckeditor');
        $fileName = collect(explode('/', $path));
        return response()->json(['fileName' => $fileName->last(), 'uploaded' => 1, 'url' => asset($path)]);
    }
}
