@extends('front.master')

@section('title')

@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-success text-center">Welcome To Our Dashboard</h3>
                </div>
{{--                @foreach($products as $product)--}}
{{--                <div class="col-md-4 mt-5">--}}
{{--                    <div class="card">--}}
{{--                        <img src="{{ asset($product->image) }}" alt="" class="card-img-top" style="height: 250px">--}}
{{--                        <div class="card-body">--}}
{{--                            <h1>{{ $product->category->name }}</h1>--}}
{{--                            <h4>{{ $product->name }}</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>

@endsection
