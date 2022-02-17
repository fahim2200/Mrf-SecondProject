@extends('master')

@section('title')
    BITM Page

@endsection
@section('body')
    <h1>{{$hasib}}</h1>
    <h1>{{$topu}}</h1>

    @foreach($fahim as $key => $value)
        @foreach($value as $item)
        <h1>{{$item }}</h1><br/>
        @endforeach
{{--        @if($key >= 3 && $key <= 5)--}}
{{--    <h1>Index No : {{$key}} and Value : {{$value}}</h1>--}}
{{--        @else--}}
{{--            <h1>Out of Range</h1>--}}
{{--        @endif--}}
    @endforeach

@endsection
{{--<a href="{{ route('home') }}"> Home </a>--}}
{{--<a href="{{ route('bitm') }}"> BITM </a>--}}
{{--<a href="{{ route('about') }}"> About </a>--}}
{{--<a href="{{ route('contact') }}"> Contact </a>--}}

