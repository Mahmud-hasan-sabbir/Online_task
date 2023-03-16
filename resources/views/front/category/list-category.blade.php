@extends('front.master')

@section('title')
    Add category
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center text-success">category List</h3>
                            <a href="{{ route('add.category') }}" class="btn btn-success float-end">Add Category</a>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::has('message') ? Session::get('message') :'' }}</p>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('edit.category',['id'=>$category->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('delete.category',['id'=>$category->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete category')">Delete</a>
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



