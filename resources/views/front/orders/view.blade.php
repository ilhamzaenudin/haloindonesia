@extends('layouts.front')

@section('title')
    Orders View
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Orders View
                            <a href="{{ url('my-orders') }}" class="btn btn-danger text-white float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Shipping Details</h4>
                                <hr>
                                <label for="">First Name</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Last Name</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Contact</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Shipping address</label>
                                <div class="border">
                                    {{ $orders->address1 }},
                                    {{ $orders->address2 }},
                                    {{ $orders->city }},
                                    {{ $orders->state }},
                                    {{ $orders->country }}
                                </div>
                                <label for="">Zip Code</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Order Details</h4>
                                <hr>
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>Rp. {{ $item->price }}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Prod Image">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">
                                    Grand Total: <span class="float-end">Rp. {{ $orders->total_price }}</span>
                                </h4>
                                <h6 class="px-2">
                                    Payment Mode: {{ $orders->payment_mode }}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

@endsection