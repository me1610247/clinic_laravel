@extends('layouts.app')

@section("title","Show Product")

@section("content")
  <h2 class="text-center">All Products</h2>
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
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->type}}</td>
        </tr>
        @endforeach
@stop