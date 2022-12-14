<?php

namespace App\Http\Controllers\dashboard;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::latest()->get();
        return view('dashboard.category.index', compact('datas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $this->repository->store($request);
        return redirect()->route('dashboard.category.index')->withSuccess('Category was successful added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('dashboard.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
            'slug' => 'required|unique:categories,slug,'.$category->id,
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $this->repository->update($category, $request);
        return redirect()->route('dashboard.category.index')->withSuccess('Category was successful updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->repository->delete($category);
        return redirect()->route('dashboard.category.index')->withSuccess('Category was successful deleted!');
    }
}
