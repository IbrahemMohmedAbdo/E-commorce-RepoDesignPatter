<?php

namespace App\Http\Controllers\Front;

use App\Models\CartItem;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //
    public function index()
    {
        $cartItems = Cart::content();

        return view('front.Categories.cart-index', compact('cartItems'));
    }





    public function add(Request $request, $productId)
    {


        // $cart = Auth::user()->cart;
        $product = Product::findOrFail($productId);

        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price,

        );



        return redirect()->route('cart.index')->with('msg', 'ur data stored in cart succ');
    }
}
