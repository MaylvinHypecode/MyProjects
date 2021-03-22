@extends('layouts.app')

@section('content')

    <div class="produit_1">
        {{$product->title}}<br>
    </div>

    <div class="produit_image">
        <img src="{{ $product->image->url() }}">
    </div>

    <div class="produit_description">
        {{$product->description}}<br>
    </div>

    <div class="produit_price">
        {{$product->price}}$<br>
    </div>

    <div class="produit_stock">
    En Stock<br>
    </div>
    <div>
        <div class="produit_quantity">Quantity :</div>
        <select type="number" name="quantity" class="bouton_quantity">
            <option value="1" selected="true">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
            <button type="submit" class="option_to_buy" onclick="save('{{$product->title}}', '{{$product->quantity}}', '{{$product->price}}', '{{$product->image->url()}}')">
                Add to basket
            </button>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>
        <a href={{url("http://facebook.com")}} class="fa fa-facebook" ></a>
        <a href={{url("http://twitter.com")}} class="fa fa-twitter" ></a>
        <p class="p0">&copy;All rights reserved by BARGUE & LAFAYE</p>
    </footer>
@endsection
