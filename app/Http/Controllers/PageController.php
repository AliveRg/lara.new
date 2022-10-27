<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Service\Cart;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::limit(10)->get();

        return view('home', [
            'products' => $products
        ]);
    }

    public function filters()
    {
        return view('filters');
    }
}
