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
<script>
	// Animated Numbers:
var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text(),
      }).animate({
          countNum: countTo,
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(commaSeparateNumber(Math.floor(this.countNum)));
          },
          complete: function() {
            $this.text(commaSeparateNumber(this.countNum));
            //alert('finished');
          },

        });
    });
    a = 1;
  }

});

function commaSeparateNumber(val) {
  while (/(\d+)(\d{3})/.test(val.toString())) {
    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
  }
  return val + '+';

}
</script>