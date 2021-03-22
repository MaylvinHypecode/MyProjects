<?php

namespace App\Http\Controllers;

use App\Model\product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin')->only(['admin']);
    }
    public function admin() {
        return view('layouts.admin');
    }

    public function create(Request $request)
    {
        $product = new product();
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->quantity = $request->get('quantity');
        $product->price = $request->get('price');
        $product->image = $request->file('image');
        $product->save();

        return redirect()->route('product');
    }
}
