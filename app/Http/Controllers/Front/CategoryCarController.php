<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryCarController extends Controller
{
    //
    public function getCategoryCar(){

        $categoryCar=Category::where('name', 'cars')->first();

        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', 'cars');
        })->get();
        return view('front.Categories.CategoryCar',compact('categoryCar','products'));



    }

public function getCarDetails($id)
{

  $product = Product::findOrFail($id);
/*
    $product = Product::whereHas('categories', function ($query) {
        $query->where('name', 'cars');
    })->get();
    */

    return view('front.Categories.product-details',compact('product'));

}











}
