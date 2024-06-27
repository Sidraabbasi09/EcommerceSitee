<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addtoCART(request $request,$id)
    {
    if(Auth::check()){
    $product=Product::find($id);
    $userId=Auth::user()->id;
    $Quantity=$request->quantity;
    $cart=Cart::where('user_id',$userId)->where('product_id',$id)->first();
    if($cart){
        $cart->quantity += $Quantity;
    }
    else{
        $cart = new Cart([
            'product_id'=>$id,
            'user_id'=>$userId,
            'quantity'=>$Quantity
        ]);
    }
    $cart->save();
    return redirect()->route('indexpage');
    }
    else{
        return redirect()->route('login');
    }

    }
public function showcart(){
        $userId = Auth::id();
        $cartItems = Cart::where('user_id', $userId)->with('product')->get();
        return view('Cartshow' , compact('cartItems'));
    }
public function removecart($deleteitem){
        $cartItems = Cart::findorFail($deleteitem);
        $cartItems->delete();
        return redirect()->back();
    }
    // To update cart,quanity,and price //
public function update(Request $request, $id)
{
    $cartItem = Cart::find($id);
    $cartItem->quantity = $request->quantity;
    $cartItem->save();

    return redirect()->back();
}
public function showCheckout()
{
    $userId = Auth::id();
    $cartItems = Cart::where('user_id', $userId)->with('product')->get();
    return view('Checkout', compact('cartItems'));
}
}

