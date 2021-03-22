@extends('layouts.app')

@section('content')

    <div class="titre-catalogue">Catalogue</div>

    @foreach(\App\Model\product::all() as $product)
        <div id ='moncadre-1'>
            <img id="test" src="{{ $product->image->url() }}"><br>
            {{$product->title}}<br>
            {{$product->description}}<br>
            {{$product->quantity}} en stock<br>
            {{$product->price}}$<br>

            <div id="cadre">
                <button onclick="window.location='{{url("http://127.0.0.1:8000/product/$product->id")}}'" type="submit" class="bouton-produit1">
                    Details
                </button>
            </div>


            <div>
               <button type="submit" class="bouton-produit1" id="button" onclick="save('{{$product->title}}', '{{$product->quantity}}', '{{$product->price}}', '{{$product->image->url()}}')">
                    Buy
                </button>
            </div>
        </div>


    @endforeach

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>

        <a href={{url("http://facebook.com")}} class="fa fa-facebook" ></a>
        <a href={{url("http://twitter.com")}} class="fa fa-twitter" ></a>
        <p class="p0">&copy;All rights reserved by BARGUE & LAFAYE</p>

    </footer>

@endsection
