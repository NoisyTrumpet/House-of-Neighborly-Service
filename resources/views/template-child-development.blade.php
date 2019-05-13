{{--
  Template Name: Child Developement Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	@include('partials/numbersScript')
	<div class="container family">
		@svg('diaper', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="15000">0</h3>
				<p class="numbers-sub">@field('numbers_diapers_copy')</p>
			</div>
	</div>
	<div class="container">
		<h1 class="program-page-header">@field('main_headline')</h1>
		<h5 class="program-page-text">@field('main_description')</h5>
	</div>
	<div class="testimonials-wrapper child">
        	@query([
        		'post_type' => 'testimonials',
			    'name' => 'kids-place-parent',
			    'p' => '158'
        	])
			@posts
			  <h4 class="testimonials-quote">@content</h4>
                <p class="testimonials-author">- @title</p>
            @endposts
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
		</div>
	</div>
	@include('partials.need-help')
	@include('partials.donateCTA')
@endsection