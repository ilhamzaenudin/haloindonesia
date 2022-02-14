@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}"> 
                Home
            </a>/
                Cart 
        </h6>
    </div>
</div>

    <div class="container">
        <div class="card shadow">
            @if($cartitems->count() > 0)
            <div class="card-body">
                @php $total = 0; @endphp
                @foreach ($cartitems as $item)
                <div class="row product_data">
                    <div class="col-md-2 my-auto">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="Image here">
                    </div>
                    <div class="col-md-3 my-auto">
                        <h6>{{ $item->products->name }}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>Rp. {{ $item->products->selling_price }}</h6>
                    </div>
                    <div class="col-md-3 my-auto">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        @if( $item->products->qty >= $item->prod_qty)
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text changeQuantity decrement-btn position-relative">-</button>
                                <input type="text" name="quantity" value="{{ $item->prod_qty }}" class="form-control qty-input" />
                                <button class="input-group-text changeQuantity increment-btn">+</button>
                            </div>
                            @php $total += $item->products->selling_price * $item->prod_qty; @endphp
                            @else
                                <h6>Out of Stock</h6>
                        @endif
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-danger delete-cart-item"> <i class="fa fa-trash"></i></button>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-footer">
                <h6>
                    Total Price : Rp. {{ $total }}
                    <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Checkout</a>
                </h6>
            </div>
            @else
             <div class="card-body text-center">
                 <h2>Your <i class="fa fa-shopping-cart"></i> Cart is Empty </h2>
                 <a href="{{ url('category') }}" class="btn btn-outline-primary float-end">Continue Shopping</a>
             </div>
             @endif
        </div>
    </div>

@endsection