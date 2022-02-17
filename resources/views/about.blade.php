@extends('master')

@section('title')
   About Page

@endsection
@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{$product['image']}}" alt="" class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3 class="card-title">{{$product['name']}}</h3>
                            <h5 class="card-title">Price:{{$product['price']}}</h5>

                            <hr/>
                            <a href="{{route('detail',['id' => $product['id']])}}" class="btn btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


{{--<h1>This is ABOUT page....</h1>--}}

{{--<a href="{{ route('home') }}"> Home </a>--}}
{{--<a href="{{ route('bitm') }}"> BITM </a>--}}
{{--<a href="{{ route('about') }}"> About </a>--}}
{{--<a href="{{ route('contact') }}"> Contact </a>--}}
