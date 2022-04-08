<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

if (!function_exists('upload')) {
    function upload($file, $path): string
    {
        $pngimg = imagecreatefrompng($file);

// get dimens of image

        $w = imagesx($pngimg);
        $h = imagesy($pngimg);;

// create a canvas

        $im = imagecreatetruecolor ($w, $h);
        imageAlphaBlending($im, false);
        imageSaveAlpha($im, true);

// By default, the canvas is black, so make it transparent

        $trans = imagecolorallocatealpha($im, 0, 0, 0, 127);
        imagefilledrectangle($im, 0, 0, $w - 1, $h - 1, $trans);

// copy png to canvas

        imagecopy($im, $pngimg, 0, 0, 0, 0, $w, $h);

// lastly, save canvas as a webp

        imagewebp($im, str_replace('png', 'webp', $file));

// done

        imagedestroy($im);

        return Storage::url(Storage::disk('public')->putFile($path, $file));
    }
}

if (!function_exists('removeFileUpload')) {
    function removeFileUpload($path)
    {
        $filename = str_replace('/storage/uploads/', '', $path);
        if (File::exists($filename)) {
            unlink(storage_path('app/public/uploads/' . $filename));
        }
    }
}
