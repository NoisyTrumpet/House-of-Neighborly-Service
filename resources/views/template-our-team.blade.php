{{--
  Template Name: Our Team Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<div class="container">
		<div class="team-section">
			<h1>@field('leadership_title')</h1>
			<ul>
				@fields('leadership_list')
				<li><h5>@sub('leader_name')</h5><p>@sub('position_title')</p></li>
				@endfields
			</ul>
		</div>
		<div class="team-section">
			<h1>@field('admin_title')</h1>
			<ul>
				@fields('admin_list')
				<li><h5>@sub('admin_name')</h5><p>@sub('admin_title')</p></li>
				@endfields
			</ul>
		</div>
		<div class="team-section">
			<h1>@field('program_staff_title')</h1>
			<ul>
				@fields('program_list')
				<li><h5>@sub('staff_name')</h5><p>@sub('staff_title')</p></li>
				@endfields
			</ul>
		</div>
	</div>
@endsection