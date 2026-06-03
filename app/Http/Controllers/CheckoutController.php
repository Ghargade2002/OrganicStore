<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;

class CheckoutController extends Controller
{
 public function store(Request $request)
    {
        
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $cartTotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
    
        $order = Order::create([
            'user_id' => Auth::id(),
            'total'   => $cartTotal,
            'status'  => 'Pending',
        ]);

        
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity'   => $cartItem->quantity,
                'price'      => $cartItem->product->price,
            ]);
        }

       
    Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully!');
    }   
}
