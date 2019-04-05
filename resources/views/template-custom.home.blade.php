{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')
@section('content')
	@include('partials.page-header')
<div class="jumbotron text-center">

	<h1 id="site_title"> {{ get_bloginfo('name') }} </h1>
	<p id="hero_subtitle"> {{ get_field('hero_subtitle') }}</p>
	<style>
		#menu-navigation{
			display: flex;
		}

		#menu-navigation > .menu-item{
			list-style-type: none;
		}
	</style>
</div>
@endsection