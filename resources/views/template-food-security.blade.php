{{--
  Template Name: Food Security Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	@include('partials/numbersScript')
	<div class="container family">
		@svg('apple', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="25000">0</h3>
				<p class="numbers-sub">@field('numbers_meals')</p>
			</div>
	</div>
	<div class="container">
		<h1 class="program-page-header">@field('main_headline')</h1>
		<h5 class="program-page-text">@field('main_description')</h5>
	</div>
	<div class="container">
		<div class="row family">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 family">
				<h5 class="program-sub-header">@field('headline_1')</h5>
				<p class="program-page-text">@field('description_2')</p>
			</div>

		</div>
	</div>
	@include('partials.need-help')
	@include('partials.donateCTA')
@endsection