<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('upload')) {
    function upload($file, $path): string
    {
        return Storage::url(Storage::disk('public')->putFile($path, $file));
    }
}

if (!function_exists('removeFileUpload')) {
    function removeFileUpload($path)
    {
        $filename = str_replace('/storage/uploads/', '', $path);
        unlink(storage_path('app/public/uploads/' . $filename));
    }
}
