<?php

namespace App\RepoInterface;


use App\Models\Category;
use App\RepoInterface\RepoBase;


class CategoryRepo implements RepoBase
{
    // protected $modelClass;

    // public function __construct($modelClassName)
    // {
    //     $this->modelClass = $modelClassName;
    // }

    public function index()
    {


      $categories= Category::all();
        return view('dashboard.Categories.index',compact('categories'));
    }

    public function create()
    {
        // Implementation for create method
        return view('dashboard.Categories.create');
    }

    public function store($request)
    {

       // Check if request has file
    if ($request->hasFile('file')) {
        $fileName = time() . $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('images', $fileName, 'public');
    } else {
        // If no file, create category
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('msg', 'Category created successfully.');
    }
    }


    public function show($category)
    {


        return view('dashboard.Categories.show',compact('category'));
    }

    public function edit($category)
    {

        // $category= Category::findOrFail($id);
        return view('dashboard.Categories.edit', compact('category'));
    }

    public function update($request, $category)
    {


        $requestData  = $request->all();


        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;

        $category->update($requestData);


            return redirect()->route('categories.index')->with('msg', 'Category created successfully.');


    }

    public function destroy($id)
    {

        $model = Category::findOrFail($id);
        // Implementation for destroy method
    }

}
