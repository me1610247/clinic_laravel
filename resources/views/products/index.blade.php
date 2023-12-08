@extends('layouts.app')

@section("title","Show Product")

@section("content")
  <h2 class="text-center my-4">All Products</h2>
  <a class="btn btn-primary mb-5" href="{{route('products.create')}}">Create New Product</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>
            <a href="{{route('products.show',$product->id)}}">{{$product->title}}</a>
        </td>
        <td>{{$product->description}}</td>
        <td>
            <a class="btn btn-info" href="">Edit</a>
            <a class="btn btn-danger" href="">Delete</a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>        
@stop