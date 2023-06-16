<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Http;

class MobidelController extends Controller
{
    public function fetchData(string $restaurantID, string $wid)
    {
        $response = Http::get(
            'https://online.mobidel.ru/getMenu.php?restaurantID=' . $restaurantID . '&wid=' . $wid);

        $jsonData = $response->json();
        foreach ($jsonData as $categoryAndProducts) {

            $prepared_category = Category::where('uid', $categoryAndProducts['description']['id'])->first();

            if (is_null($prepared_category)) {
                $prepared_category = new Category();
            }

            $prepared_category['uid'] = $categoryAndProducts['description']['id'];
            $prepared_category['image'] = $categoryAndProducts['description']['image'];
            $prepared_category['title'] = $categoryAndProducts['description']['name'];
            $prepared_category->save();

            foreach ($categoryAndProducts['childrens'] as $product) {

                if ($product["description"]["price"] !== "0") {
                    $prepares_product = Product::where('uid', $product["description"]["id"])->first();

                    if (is_null($prepares_product)) {
                        $prepares_product = new Product();
                    }

                    $prepares_product['uid'] = $product["description"]["id"];
                    $prepares_product['title'] = $product["description"]["name"];
                    $prepares_product['img'] = $product["description"]["image"];
                    $prepares_product['price'] = $product["description"]["price"];
                    $prepares_product['text'] = $product["description"]["description"];
                    $prepares_product['sku'] = $product["description"]["oneCID"];
                    $prepares_product['cat_id'] = $product["description"]["parent"];
                    $prepares_product->save();
                }

            }

        }
        return redirect()->back()->with('success', 'Товары и категории успешно выгружены.');
    }
}
