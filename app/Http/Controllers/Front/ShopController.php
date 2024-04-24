<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index(){



        return view('front.index');



    }
    public function Shop()
    {
        return view('front.shop');
    }
}
