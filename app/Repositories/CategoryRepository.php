<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function store($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        //update a image
        
    }
    public  function update($request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        

    }
    // public function delete($id)
    // {
    //     $category = Category::find($id);
    //     $category->delete();
    // }
}
