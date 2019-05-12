{{--
  Template Name: Capital Campaign Template
--}}
@extends('layouts.app')
@section('content')
<header class="alt">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="capital-header">Building Hope @title</h1>
        <p class="capital-sub">@field('capital_subtitle')</p>
      </div>
    </div>
  </div>
</header>



@endsection