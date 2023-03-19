@extends('layouts/app')

@include('includes.styles')
    <link rel="stylesheet" href="{{ url('styles/style.css') }}">
@endsection

@yield('content')
@endsection

@include('includes.script')
@endsection