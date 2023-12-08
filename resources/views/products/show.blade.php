@extends('layouts.app')

@section("title","Show Product")

@section("content")
  <div class="card my-5" style="width: 18rem">
    <div class="card-body">
        <h5 class="card-title">{{$product->title}}</h5>
        <p class="card-text">{{$product->description}}</p>
    </div>
  </div>
@stop