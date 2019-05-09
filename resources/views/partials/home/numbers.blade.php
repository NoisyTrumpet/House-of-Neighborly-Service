<section id="numbers">
	<h1 class="numbers-header">{!! get_field('number_header') !!}</h1>
	<div class="row numbers-row">
		<div class="col-xs-6 col-sm-6 col-md-3">
			@svg('head', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="500">0</h3>
				<p class="numbers-sub">{!! get_field('numbers_interventions') !!}</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			@svg('apple', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="25000">10000</h3>
				<p class="numbers-sub">{!! get_field('numbers_meals') !!}</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			@svg('dumbell', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="300">0</h3>
				<p class="numbers-sub">{!! get_field('numbers_fitness') !!}</p>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-3">
			@svg('diaper', 'numbers-icon')
			<div id="counter">
				<h3 class="counter-value" data-count="15000">10000</h3>
				<p class="numbers-sub">{!! get_field('numbers_diapers') !!}</p>
			</div>
		</div>
	</div>
</section>