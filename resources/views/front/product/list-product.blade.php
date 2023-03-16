@extends('front.master')

@section('title')
    Product list
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">product List</h3>
                            <a href="{{ route('add.product') }}" class="btn btn-success float-end">Add product</a>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::has('message') ? Session::get('message') :'' }}</p>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            <img src="{{ asset($product->image) }}" alt="" height="70px" width="80px">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit.product',['id'=>$product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('delete.product',['id'=>$product->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete Product')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



