<?php

namespace App\Http\Controllers;

use App\Model\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product($id)
    {
        $product = product::where('id', $id)->firstOrFail();

        return view('layouts.product')->withproduct($product);
    }
}
