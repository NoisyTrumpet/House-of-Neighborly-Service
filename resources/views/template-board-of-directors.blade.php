{{--
  Template Name: Board of Directors Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<div class="container">
		<div class="team-section">
			<h1>@field('exec_title')</h1>
			<ul>
				@fields('exec_list')
				<li><h5>@sub('exec_name')</h5><p>@sub('exec_position')</p></li>
				@endfields
			</ul>
		</div>
		<div class="team-section">
			<h1>@field('board_title')</h1>
			<ul>
				@fields('board_list')
				<li><h5>@sub('board_name')</h5><p>@sub('board_position')</p></li>
				@endfields
			</ul>
		</div>
		<div class="team-section">
			<h1>@field('oficio_title')</h1>
			<ul>
				@fields('oficio_list')
				<li><h5>@sub('oficio_name')</h5><p>@sub('oficio_position')</p></li>
				@endfields
			</ul>
		</div>
	</div>

@endsection