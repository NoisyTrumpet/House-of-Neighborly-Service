{{--
  Template Name: Get Involved Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<div class="container get-involved-wrapper">
		<h1 class="program-sub-header">@field('main_title')</h1>
		<h5 class="program-page-text">@field('main_sub')</h5>
	</div>
	<div class="container">
		<div class="row family">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 family">
				<h5 class="program-sub-header">@field('headline_1')</h5>
				<p class="program-page-text">@field('description_1')</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 family">
				<h5 class="program-sub-header">@field('headline_2')</h5>
				<p class="program-page-text">@field('description_2')</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 family">
				<h5 class="program-sub-header">@field('headline_3')</h5>
				<p class="program-page-text">@field('description_3')</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 family">
				<h5 class="program-sub-header">@field('headline_4')</h5>
				<p class="program-page-text">@field('description_4')</p>
			</div>
			</div>
	</div>
	<div class="container volunteer-form-wrapper">
		<h1 class="program-sub-header">Volunteer</h1>
		{{-- <div class="form"> --}}
		@shortcode('[gravityform id="4" title="false" description="false"]')
		{{-- </div> --}}
	</div>



@endsection