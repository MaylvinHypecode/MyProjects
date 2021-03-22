@extends('layouts.app')

@section('content')

    <form action="{{url('store')}}" method="POST" id="AdminCreateForm" enctype="multipart/form-data">

        <div class="formulaire">
            {{ csrf_field() }}
            <p>Image :</p>
            <input type="file" name="image">
            <p>Car Model :</p>
                <input type="'text" class="formulaire1" id="title" name="title"><br>
            <p>Description :</p>
                <input type="'text" class="formulaire1" id="description" name="description"><br>
            <p>Price :</p>
                <input type="'text" class="formulaire1" id="price" name="price"><br>
            <p>Stock :</p>
                <select type="'number" class="formulaire1" id="stock" name="quantity"><br>
                <option value="1" selected="true">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                </select>
            <div>
                <br><input type="submit" value="Envoyer" class="bouton-formulaire">
            </div>
        </div>
    </form>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>
        <a href={{url("http://facebook.com")}} class="fa fa-facebook" ></a>
        <a href={{url("http://twitter.com")}} class="fa fa-twitter" ></a>
        <p class="p0">&copy;All rights reserved by BARGUE & LAFAYE</p>
    </footer>
@endsection
