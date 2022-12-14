<?php

namespace App\Repositories;

use App\Helpers\ImageHelper;
use App\Models\Category;

class CategoryRepository
{
    public function store($request)
    {
        $input = $request->all();

        if($request->has('meta_key')){
            $input['meta_key'] = str_replace(["value", "{", "}", "[","]",":","\""], '', $request->meta_key);
        }

        $input['photo'] = ImageHelper::handleUploadedImage($request->file('photo'),'assets/images');

        Category::create($input);

    }
    public  function update($category, $request)
    {
        $input = $request->all();
        if ($file = $request->file('photo')) {
            $input['photo'] = ImageHelper::handleUpdatedUploadedImage($file,'/assets/images',$category,'/assets/images/','photo');
        }
        $category->update($input);
    }

    public function delete($category)
    {
        ImageHelper::handleDeletedImage($category,'photo','assets/images/');
        $category->delete();
    }
}
