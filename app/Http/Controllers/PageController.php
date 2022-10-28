<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\Cart;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::limit(12)->get();

        return view('home', [
            'products' => $products
        ]);
    }

    public function onegoods()
    {
        $products = Product::limit(4)->get();

        return view('katalog-one__goods', [
            'products' => $products
        ]);
    }

    public function filters()
    {
        $products = Product::limit(9)->get();

        return view('filters', [
            'products' => $products
        ]);
    }


}
