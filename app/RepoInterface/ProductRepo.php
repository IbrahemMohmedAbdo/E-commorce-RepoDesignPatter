<?php

namespace App\RepoInterface;

use App\Models\Product;
use App\Models\Category;
use App\RepoInterface\RepoBase;

class ProductRepo implements RepoBase
{
    public function index()
    {
        $products = Product::all();


        return view('dashboard.Products.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('dashboard.Products.create', compact('categories'));
    }
    public function store($request)
    {

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request['description'];
        $product->price = $request->input('price');

        // To store image for product..
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images', $filename, 'public');
            $product->image = '/storage/' . $path;
        }

        // To store product id with category id in pivot table...
        $category = Category::find($request->input('category_id'));

        $category->products()->save($product);


        return redirect()->route('products.index')->with('msg', 'Product created successfully.');
    }


    public function show($product)
    {


        return view('dashboard.products.show', compact('product'));
    }

    public function edit($product)
    {
        $categories = Category::pluck('name', 'id');

        return view('dashboard.products.edit', compact('product', 'categories'));
    }

    public function update($request, $product)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images', $filename, 'public');
            $product->image = '/storage/' . $path;
        }
        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $category = Category::find($request->input('category_id'));
        $product->categories()->sync($category);

        return redirect()->route('products.index')->with('msg', 'Product Updated successfully.');
    }


    public function destroy($id)
    {

        $model = Product::findOrFail($id);
        // Implementation for destroy method
    }
    
}
