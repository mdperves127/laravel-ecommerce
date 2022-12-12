<?php

namespace App\Repositories;

class CategoryRepository
{
    public function store($request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
    }
    public  function update($request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
