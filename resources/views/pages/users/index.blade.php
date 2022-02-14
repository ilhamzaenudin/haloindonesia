@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Registered Users</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $item)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $item->name.' '.$item->lname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <a href="{{ url('view-user/'.$item->id) }}" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection