<?php

namespace App\Helpers;

use App\Models\Log\LogPath;
use Illuminate\Support\Facades\Storage;

class FileHelper
{
    public static function uploadFile($file, $directory)
    {
        $fileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs('storage/' . $directory, $fileName);
        return $filePath;
    }
    // send ftp
    public static function uploadFTP($file , $directory)
    { 
        $path = Storage::disk('ftp')->putFile($directory, $file);
        return $path;
    }
    // Delete Files
    public static function deleteFileIfExists($filePath)
    {
        if (file_exists($filePath)) {
            return unlink($filePath);
        } else {
            return false;
        }
    }
    // Delete Files
    public static function checkFile($file, $desiredWidth, $desiredHeight, $maxFileSize)
    {
        list($width, $height) = getimagesize($file->getPathname());
        if ($width > $desiredWidth || $height > $desiredHeight) {
            return " ابعاد تصویر مجاز نیست . ابعاد مجاز " . "(" . $desiredHeight . "*" . $desiredWidth . ") می باشد";
        }

        $fileSize = $file->getSize(); // حجم فایل
        if ($fileSize > $maxFileSize) {
            return " حجم تصویر بیش از حد مجاز است ";
        }

        $imageType = exif_imagetype($file->getPathname());
        if ($imageType !== IMAGETYPE_JPEG && $imageType !== IMAGETYPE_PNG && $imageType !== IMAGETYPE_GIF && $imageType !== IMAGETYPE_WEBP) {
            return " فرمت وارد شده مجاز نیست . (png , jpg , jpeg , webp , gif) ";
        }

        return null;
    }

}
