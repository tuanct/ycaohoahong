<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

if (!function_exists('upload')) {
    function upload($file, $path): string
    {
        switch ($file->getMimeType()) {
            case 'image/png':
                $newImg = imagecreatefrompng($file);
                break;
            case 'image/x-ms-bmp':
                $newImg = imagecreatefrombmp($file);
                break;
            case 'image/jpeg':
                $newImg = imagecreatefromjpeg($file);
                break;
        }

        if (empty($newImg)) {
            return Storage::url(Storage::disk('public')->putFile($path, $file));
        }

// get dimens of image

        $w = imagesx($newImg);
        $h = imagesy($newImg);;

// create a canvas

        $im = imagecreatetruecolor($w, $h);
        imageAlphaBlending($im, false);
        imageSaveAlpha($im, true);

// By default, the canvas is black, so make it transparent

        $trans = imagecolorallocatealpha($im, 0, 0, 0, 127);
        imagefilledrectangle($im, 0, 0, $w - 1, $h - 1, $trans);

// copy png to canvas

        imagecopy($im, $newImg, 0, 0, 0, 0, $w, $h);

// lastly, save canvas as a webp

        switch ($file->getMimeType()) {
            case 'image/png':
                imagewebp($im, str_replace('png', 'webp', $file));
                break;
            case 'image/x-ms-bmp':
                imagewebp($im, str_replace('bmp', 'webp', $file));
                break;
            case 'image/jpeg':
                imagewebp($im, str_replace('jpeg', 'webp', $file));
                break;
        }

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


if (!function_exists('formatDatetime')) {
    function formatDatetime($datetime, $format = 'Y-m-d')
    {
        return \Carbon\Carbon::parse($datetime)->format($format);
    }
}

if (!function_exists('subText')) {
    function subText($text, $length = 10)
    {
        $lengthText = strlen($text);
        return $lengthText > $length ? substr(strip_tags($text),0, $length) . '...' : $text;
    }
}


