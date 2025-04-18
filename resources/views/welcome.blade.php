@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="w-100 d-flex flex-column gap-5">
        @include('homepage.carousel')
        @include('homepage.seasonal')
    </div>
@endsection
