<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use Image;

class ImageHelper
{
    //upload single image
    public static function handleUploadedImage($file, $size)
    {
        if ($file) {
            $thum = time() . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize($size[0], $size[1])->save(base_path('public/assets/images') . '/' . $thum);
            return $thum;
        }
    }

    //update single image

    public static function handleUpdatedUploadedImage($file, $path, $data, $delete_path, $field)
    {
        $name = time() . $file->getClientOriginalName();

        $file->move(base_path('public/') . $path, $name);
        if ($data[$field] != null) {
            if (file_exists(base_path('public/') . $delete_path . $data[$field])) {
                unlink(base_path('public/') . $delete_path . $data[$field]);
            }
        }
        return $name;
    }

    //delete single image



    public static function handleDeletedImage($data, $field, $delete_path)
    {


        if ($data[$field] != null) {
            if (file_exists(base_path('public/') . $delete_path . $data[$field])) {
                unlink(base_path('public/') . $delete_path . $data[$field]);
            }
        }
    }
}
