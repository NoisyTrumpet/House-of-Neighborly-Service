{{--
  Template Name: About Page Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<div class="container">
		<section id="about-subtitle">
			<div class="about-subtitle-section">
				<h2
				data-aos="fade"
				{{--data-aos-offset="200"--}}
				data-aos-delay="10"
			    data-aos-duration="1000"
			    data-aos-easing="ease-in-out"
			    data-aos-mirror="true"
			    data-aos-once="false"
			    {{-- data-aos-anchor-placement="top-center" --}}
				class="about-subtitle">
					@field('about_subtitle')
				</h2>
			</div>
		</section>
	</div>
	<section id="about-image-blocks">
		<div class="about1">
			<div
			data-aos="fade-up"
				{{--data-aos-offset="200"--}}
			data-aos-delay="10"
    		data-aos-duration="1000"
    		data-aos-easing="ease-in-out"
    		data-aos-mirror="true"
    		data-aos-once="false"
    		data-aos-anchor-placement="top-center"
			class="container">
			<h3 class="about1-header">@field('about_block_1_header')</h3>
			<p class="about1-subtitle">@field('about_sub_1')</p>
			</div>
		</div>
		<div class="about2">
			<div class="container">
				<h4
				data-aos="fade-up"
				{{--data-aos-offset="200"--}}
			data-aos-delay="10"
    		data-aos-duration="1000"
    		data-aos-easing="ease-in-out"
    		data-aos-mirror="true"
    		data-aos-once="false"
    		data-aos-anchor-placement="top-center"
				class="about2-subtitle">@field('about_sub_2')</h4>
			</div>
		</div>
		<div class="about3">
			<div class="container">
				<h4
				data-aos="fade-up"
				{{--data-aos-offset="200"--}}
			data-aos-delay="10"
    		data-aos-duration="1000"
    		data-aos-easing="ease-in-out"
    		data-aos-mirror="true"
    		data-aos-once="false"
    		data-aos-anchor-placement="top-center"
				class="about3-subtitle">@field('about_sub_3')</h4>
			</div>
		</div>
	</section>
	<section id="about-stories">
		@query([
				'post_type' => 'post',
				'posts_per_page' => 3,
				'cat' => '14'
			])
		<div class="container">
			<h3 class="story-header">Neighborly Stories</h3>
			<div class="row">
			@posts
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 story-col">
				<a href="@permalink">
				<div class="story-image">
					@thumbnail('medium')
				</div>
				</a>
				<h5 class="story-title">@title</h5>
			</div>
			@endposts
			</div>
			@php(wp_reset_query())
			<a href="/capital-campaign">
				<button class="big blue hns-button">More Impacts</button>
			</a>
		</div>
	</section>
	<section id="timeline">
		<h3 class="story-header">Timeline of Key Events</h3>

	</section>


@endsection