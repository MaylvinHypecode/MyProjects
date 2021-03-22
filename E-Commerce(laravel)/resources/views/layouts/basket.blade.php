@extends('layouts.app')

@section('content')

    <table>
        <caption class="title_tableau">Recap Basket</caption>
        <tr>
            <th>Product Title</th>
            <th>Quantity</th>
            <th>Price($)</th>
            <th>Image</th>
        </tr>
        <tr>
            <td id="title"></td>
            <td id="quantity"></td>
            <td id="price"></td>
            <td id="image"></td>
        </tr>
    </table>

    @foreach(\App\Model\product::all() as $product)

        <form action="/basket" method="POST">
            <div class="formulaire">
                {{ csrf_field() }}
                <input type="hidden" value = "{{$product->title}}" name="title">
                <input type="hidden" value = "{{$product->price}}" name="price">
                <input type="hidden" value = "{{$product->quantity}}" name="quantity">
                <input type="hidden" value = "{{$product->pictures}}" name="pictures">
            </div>

    @endforeach
    <div>
        <button type="submit" class="bouton_submit">Submit</button>
    </div>
    </form>

    <a href="{{ url("/basket")}}"> <button onclick="sup()" class="bouton_delete">Delete Basket</button></a>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>

        <a href={{url("http://facebook.com")}} class="fa fa-facebook" ></a>
        <a href={{url("http://twitter.com")}} class="fa fa-twitter" ></a>
        <p class="p0">&copy;All rights reserved by BARGUE & LAFAYE</p>

    </footer>

@endsection
