<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function get() {
        return CartModel::get();
    }

    public function add($product_id){
        return CartModel::add($product_id);
    }

    public function quantity($cart_id, $quantity) {
        return CartModel::quantity($cart_id, $quantity);
    }

    public function remove($cart_id) {
        return CartModel::remove($cart_id);
    }

    public function flush() {
        return CartModel::flush();
    }

    public function total() {
        return CartModel::total();
    }

    public function count() {
        return CartModel::count();
    }
}
