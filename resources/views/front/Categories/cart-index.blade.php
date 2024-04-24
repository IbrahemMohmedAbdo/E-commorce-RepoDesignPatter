@extends('front.layouts.master')
@section('content')
    <div class="single-product section">
        <div class="container">
            <div class="row">
                <h4 class="header-title m-t-0 m-b-30"> Cart for : {{ Auth::user()->name }}</h4>
                <table class="table table table-hover m-0">

                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
