<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryBicyleController extends Controller
{
    //
    public function getCategoryBicyle(){

        $categoryBicyle=Category::where('name', 'bicycles')->first();

        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', 'bicycles');
        })->get();
        return view('front.Categories.CategoryBicyle',compact('categoryBicyle','products'));



    }
    public function getBicyleDetails($id)
{

    $product = Product::findOrFail($id);

    return view('front.Categories.product-details',compact('product'));

}
}
