<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())
                        ->with('product')
                        ->get();

        $total = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });

        return view('cart', compact('cartItems', 'total'));
    }

    
    public function add(Request $request, $productId)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Please login to add items to cart!');
        }

        $cartItem = Cart::where('user_id', Auth::id())
                       ->where('product_id', $productId)
                       ->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id'    => Auth::id(),
                'product_id' => $productId,
                'quantity'   => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    
    public function increase($id)
    {
        $cartItem = Cart::where('id', $id)
                       ->where('user_id', Auth::id())
                       ->first();
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        }
        return redirect()->back();
    }

  
    public function decrease($id)
    {
        $cartItem = Cart::where('id', $id)
                       ->where('user_id', Auth::id())
                       ->first();
        if ($cartItem) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity -= 1;
                $cartItem->save();
            } else {
                $cartItem->delete();
            }
        }
        return redirect()->back();
    }

   
    public function remove($id)
    {
        Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->back()->with('success', 'Item removed from cart!');
    }
}