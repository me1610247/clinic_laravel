@extends('layouts.app')

@section("title"," Create Product")

@section("content")
  <h2 class="text-center my-5">Create New Product</h2>
    <a href="{{route('products.index')}}" class="btn btn-primary">See All Products</a>
    <form method="POST" action="{{route('products.store')}}">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" placeholder="Enter Title" class="form-control" id="title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Email address</label>
          <textarea name="description" class="form-control" id="description" placeholder="Enter Descripition Here"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
@stop