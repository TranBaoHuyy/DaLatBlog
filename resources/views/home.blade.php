@extends('welcome')

@section('header')
    @include('gui.header')  
@endsection

@section('content')
    @include('gui.boxContent')  
    @include('gui.blogContent', ['blogs' => $blogs])
@endsection

@section('footer')
    @include('gui.footer')  
@endsection