@extends('layouts.main')
@section('content')
    <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit/Update Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Category</label>
                                    <select class="form-select">
                                        <option value="">{{ $products->category->name }}</option>
                                      </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Slug</label>
                                    <input type="text" class="form-control" value="{{ $products->slug }}" name="slug">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Small Description</label>
                                    <textarea name="small_description" rows="3" class="form-control"> {{ $products->small_description }} </textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Original Price</label>
                                    <input type="text" value="{{ $products->original_price }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" name="original_price">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Selling Price</label>
                                    <input type="text" value="{{ $products->selling_price }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" name="selling_price">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Tax</label>
                                    <input type="text" value="{{ $products->tax }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" name="tax">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Quantity</label>
                                    <input type="text" value="{{ $products->qty }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" name="qty"/>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" {{ $products->status == "1" ? 'checked' : '' }} name="status">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">trending</label>
                                    <input type="checkbox" {{ $products->trending == "1" ? 'checked' : '' }} name="trending">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Meta Title</label>
                                    <input type="text" value="{{ $products->meta_title }}" class="form-control" name="meta_title">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Meta Keywords</label>
                                    <textarea class="form-control" name="meta_keywords" rows="3">{{ $products->meta_keywords }}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" rows="3">{{ $products->meta_description }}</textarea>
                                </div>
                                @if ($products->image)
                                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Product image">
                                @endif
                                <div class="col-md-12">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
@endsection