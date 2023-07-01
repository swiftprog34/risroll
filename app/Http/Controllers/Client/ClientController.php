<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $categoriesMainDesktop = Category::take(8)->get();
        $sety = Product::where(["cat_id" => '780552575912511570'])->take(4)->get();
        return view('client.index', [
            "categoriesMainDesktop" => $categoriesMainDesktop,
            "categories" => $categories,
            "sety" => $sety
        ]);
    }

    public function category($city, $uid)
    {
        $currentCategory = Category::where(["uid" => $uid])->firstOrFail();
        $categories = Category::all();
        $categoriesMainDesktop = Category::take(8)->get();
        $products = Product::where(["cat_id"=> $uid])->get();
        return view('client.category', [
            "categoriesMainDesktop" => $categoriesMainDesktop,
            "categories" => $categories,
            "currentCategory" => $currentCategory,
            "products" => $products
        ]);
    }

    public function product($city, $uid)
    {
        $categories = Category::all();
        $categoriesMainDesktop = Category::take(8)->get();
        $product = Product::where(["uid"=> $uid])->firstOrFail();
        return view('client.product', [
            "categoriesMainDesktop" => $categoriesMainDesktop,
            "categories" => $categories,
            "product" => $product
        ]);
    }

    public function page()
    {

    }

    public function checkout()
    {

    }

    public function chooseCity($choosedCity) {

    }
}
