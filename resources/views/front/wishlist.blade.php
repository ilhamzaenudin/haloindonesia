@extends('layouts.front')

@section('title')
    My Wishlist
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url('/') }}"> 
                Home
            </a>/
                Wishlist 
        </h6>
    </div>
</div>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
            @if($wishlist->count() > 0)
                @foreach ($wishlist as $item)
                <div class="row product_data">
                    <div class="col-md-2 my-auto">
                        <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" height="70px" width="70px" alt="Image here">
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>{{ $item->products->name }}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <h6>Rp. {{ $item->products->selling_price }}</h6>
                    </div>
                    <div class="col-md-2 my-auto">
                        <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                        @if( $item->products->qty >= $item->prod_qty)
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3" style="width: 130px;">
                                <button class="input-group-text decrement-btn position-relative">-</button>
                                <input type="text" name="quantity" value="1" class="form-control qty-input" />
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        @else
                            <h6>Out of Stock</h6>
                        @endif
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-success addToCartBtn"> <i class="fa fa-shopping-cart">Cart</i></button>
                    </div>
                    <div class="col-md-2 my-auto">
                        <button class="btn btn-danger remove-wishlist-item"> <i class="fa fa-trash">Remove</i></button>
                    </div>
                </div>
                <hr>
                @endforeach
            @else
                <h4>There are no product in your Wishlists</h4>
            @endif
        </div>
        </div>
    </div>

@endsection