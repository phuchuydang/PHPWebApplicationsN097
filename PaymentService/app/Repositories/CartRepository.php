<?php

namespace App\Repositories;

use App\Interfaces\CartRepositoryInterface;
use App\Models\Cart;

class CartRepository implements CartRepositoryInterface 
{
    public function add($request)
    {
        $cart = new Cart();
        $cart->user_id = $request->userID;
        $cart->book_id = $request->bookID;
        $cart->title = $request->bookTitle;
        $cart->cover_image = $request->bookImage;
        $cart->price = $request->bookPrice;
        $cart->created_at = now();
        $cart->save();
        if($cart){
            return $cart;
        }else{
            return false;
        }
    }

    //get user cart
    public function getCart($userID)
    {
        $cart = Cart::where('user_id', $userID)->get();
        if($cart){
            return $cart;
        }else{
            return false;
        }
    }
}