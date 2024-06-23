<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    //
    public function showProducts() {
        //dd("we are here");

        $currentProducts = Product::all();

        //dd($currentProducts);

        return view('allProducts', compact("currentProducts"));
    }
}
