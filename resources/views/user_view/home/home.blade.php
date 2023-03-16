@extends('user_view.master')

@section('title')
    Home page
@endsection

@section('main')
    <section class="portfolio overflow-hidden">
        <div class="container">
            <div class="row">
                <!-- Portfolio Section Heading -->
                <div class="portfolio__heading text-center col-12">
                    <h1 class="portfolio__title fw-bold mb-5">Our Product</h1>
                </div>
                <!-- Portfolio Navigation Buttons List -->
                <div class="col-12">
                    <ul class="portfolio__nav nav justify-content-center mb-4">
                        <li class="nav-item">
                            <button class="portfolio__nav__btn position-relative bg-transparent border-0 active" data-filter="*">All</button>
                        </li>
                        @foreach($category as $item)
                            <li class="nav-item">
                                <button class="portfolio__nav__btn position-relative bg-transparent border-0" data-filter=".{{$item->id}}">{{$item->name}}</button>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
            <!-- Portfolio Cards Container -->
            <div class="row grid">
                @foreach($products as $product)
                    <div class="grid-item col-lg-4 col-sm-6 {{$product->category_id}}">
                        <a href="#!" class="portfolio__card position-relative d-inline-block w-100">
                            <img src="{{ asset($product->image) }}" alt="Random Image" class="w-100 mt-5" style="height: 250px">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
{{--    <section class="py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <h3 class="text-success text-center">All product show</h3>--}}
{{--                </div>--}}
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
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
