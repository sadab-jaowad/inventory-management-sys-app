@extends('product.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Product List</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $products->name }}</h5>
        <p class="card-text">Quntity : {{ $products->quantity}}</p>
        <p class="card-text">Mobile : {{ $products->price }}</p>
  </div>
       
    </hr>
  
  </div>
</div>