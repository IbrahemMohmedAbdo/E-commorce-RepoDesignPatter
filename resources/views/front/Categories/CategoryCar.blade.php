@extends('front.layouts.master')
@section('content')

  <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="{{ asset($categoryCar->image) }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h1>Category Name:  {{ $categoryCar->name }}</h1>


          <p><strong>Description: </strong> {{ $categoryCar->description }}</p>


        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="row">
      @foreach ($products as $product)
          <div class="col-sm-6 mb-4" >
              <div class="card" >
                  <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                  <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text">{{ $product->description }}</p>
                      <p class="card-text">Price: {{ $product->price }}</p>
                      <a href="{{ route('car.details', $product->id) }}" class="btn btn-primary">View Product</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
  </div>






  @endsection
