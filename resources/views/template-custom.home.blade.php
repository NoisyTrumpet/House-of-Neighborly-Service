{{--
  Template Name: Home Page Template
--}}
@extends('layouts.app')
@section('content')
    @include('partials/home/hero')
    @include('partials/home/mission')
    @include('partials/home/programs')
    @include('partials/home/testimonial')
    @include('partials/home/donation')
@endsection