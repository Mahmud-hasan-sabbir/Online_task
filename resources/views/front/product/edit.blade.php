@extends('front.master')

@section('title')
    Edit product
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">Edit product form</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::has('message') ? Session::get('message') :'' }}</p>
                            <form action="{{ route('update.product',['id'=>$products->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value=""><--Category Name--></option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected':'' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" value="{{ $products->name }}" class="form-control" placeholder="Product name" required>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset($products->image) }}" alt="" height="70px" width="80px">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success float-end" value="Update product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



