<?php

namespace App\Http\Controllers;

use App\Model\basket;
use App\Model\product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{

    public function view(product $id)
    {
        return view('layouts.catalogue')->with("product", $id);
    }

    public function create()
    {
        $basket = new basket();
        $basket->title = request('title');
        $basket->quantity = request('quantity');
        $basket->price = request('price');
        $basket->save();

        return redirect()->route('basket');
    }
}
