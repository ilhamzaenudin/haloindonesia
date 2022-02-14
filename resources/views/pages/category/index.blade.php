@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Category Page</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $index => $item)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image here">
                            </td>
                            <td>
                                <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection