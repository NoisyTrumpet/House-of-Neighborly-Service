{{--
  Template Name: Our Impact Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	@php
	  $banner_query = new WP_Query([
	    'post_type' => 'post',
	    'cat' => '3',
	    'posts_per_page' => 1
	  ]);
	@endphp
<div class="container">
	@posts($banner_query)
	  <a href="@permalink">
	  	<div class="banner-post">@thumbnail('full')
	  		<span class="title">@title</span>
	  		<span class="more">Read More @fa('arrow-right')</span>
	  	</div>
	  </a>
	@endposts
	@php
	$main_posts = new WP_Query([
		'post_type' => 'post',
	    'cat' => '3',
	    'offset' => '1'

	])
	@endphp
	<div class="row">
		@posts($main_posts)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<a href="@permalink">
			<div class="post-wrapper">
			<div class="post-grid-image">@thumbnail('full')</div>
			<p class="title">@title</p>
			<p class="excerpt">@excerpt</p>
			</div>
			</a>
		</div>

		@endposts
	</div>
	@php
	$stories = new WP_Query([
		'post_type' => 'post',
		'cat' => '14'
	])
	@endphp
	<h3 class="stories-title">HNS Stories</h3>
	<div class="row">

		@posts($stories)
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<a href="@permalink">
			<div class="post-wrapper">
			<div class="post-grid-image">@thumbnail('full')</div>
			<p class="title">@title</p>
			<p class="excerpt">@excerpt</p>
			</div>
		</a>
		</div>

		@endposts
	</div>

</div>



@endsection