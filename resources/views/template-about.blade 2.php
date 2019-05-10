{{--
  Template Name: About Page Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<div class="container">
		<section id="about-subtitle">
			<div class="about-subtitle-section">
				<h2 class="about_subtitle">
					{!! get_field('about_subtitle') !!}
				</h2>
			</div>
		</section>
	</div>


@endsection