{{--
  Template Name: Family Support Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	@include('partials/numbersScript')
	<div class="container family">
		@svg('head', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="500">0</h3>
				<p class="numbers-sub">@field('numbers_interventions')</p>
			</div>
	</div>
	<div class="container">
		<h1 class="program-page-header">@field('family_support_text')</h1>
		<h5 class="program-page-text">@field('program_description')</h5>
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
		</div>
	</div>
	@include('partials.need-help')
	@include('partials.donateCTA')

@endsection