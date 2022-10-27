<?php

namespace App\Http\Controllers;

use App\Service\Cart;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Cart $cart)
    {
        return view('home');
    }
}
