<?php

namespace App\Http\Controllers;

use App\Model\basket;
use App\Model\product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(basket $id) {
        return view('layouts.basket');
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


    public function delete($id)
    {
        $basket = basket::where('id', $id)->firstOrFail();
        $basket->delete();
        return view('layouts.basket')->withbasket($basket);
    }


}
