{{--
  Template Name: Capital Campaign Template
--}}
@extends('layouts.app')
@section('content')
@include('partials.playScript')
@include('partials.imageComp')
<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.3/countUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.0/TweenMax.min.js"></script>
<header class="alt">
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="/wp-content/themes/hns/resources/assets/cap-campaign.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="capital-header">Building Hope @title</h1>
        <h4 class="capital-sub">@field('capital_subtitle')</h4>
        <a href="https://youtu.be/6GgcIdydbtk" class="youtube-play" data-modal="button"><p class="capital-sub">Watch More</p>@svg('play')</a>
      </div>
    </div>
  </div>
</header>
<section id="capital-block-1">
	<div class="capital-block">
		<div class="container text-center align-items-center">
			<h1 class="capital-h1">@field('capital_h1')</h1>
			<h5 class="capital-sub-cc">@field('capital_sub')</h5>
			<hr>
			<p class="capital-p">@field('capital_description')</p>
		</div>
		<div class="container">
			<ul class="capital-list">
				@fields('capital_list')
				<li class="capital-list-item">@sub('list_item')</li>
				@endfields
			</ul>
		</div>
	</div>
</section>
<section id="image-comparison-block">
	<div class="image-comp-div">
		<h2>Keep Our Doors Open</h2>
		<figure class="cd-image-container">
			<img src="@asset('images/new.jpg')" alt="Original Image">
			<span class="cd-image-label" data-type="original">After</span>

			<div class="cd-resize-img"> <!-- the resizable image on top -->
				<img src="@asset('images/old.jpg')" alt="Modified Image">
				<span class="cd-image-label" data-type="modified">Before</span>
			</div>

			<span class="cd-handle"></span>
		</figure> <!-- cd-image-container -->
	</div>
</section>
<section id="goal-progress">
	<div class="goal-progress">
		<div class="container">
			<h1>Our Goal</h1>
			<div class="campaign-progress">
  <div class="campaign-progress__totals">
    <div class="campaign-progress__totals--raised" data-amount="1446561">
      <span class="amount" id="raisedAmount">0</span>
      {{-- <span class="label">Raised</span> --}}
    </div>
    {{-- <span>of</span> --}}
    <div class="campaign-progress__totals--goal" data-amount="2500000">
      <span class="amount">2,500,000</span>
      {{-- <span class="label">Goal</span> --}}
    </div>
  </div>
  <div class="campaign-progress__bar">
    <div class="campaign-progress__bar--inner" data-amount="75"></div>
  </div>
  {{-- <ul class="campaign-progress__markers">
    <li>Year One</li>
    <li>Year Two</li>
    <li>Year Three</li>
    <li>Year Four</li>
  </ul> --}}
  <br>
  {{-- <button onclick="animateCampaignProgress()">Animate</button>
  <button onclick="resetCampaignProgress()">Reset</button> --}}
</div>
	<a href="/donate"><button class="progress-button hns-button blue">Give Now</button></a>
		</div>


<script>
var raised_amount_el = document.querySelector('.campaign-progress__totals--raised .amount'),
    raised_amount = document.querySelector('.campaign-progress__totals--raised').dataset.amount,
    goal_amount = document.querySelector('.campaign-progress__totals--goal').dataset.amount,
    percent_raised = (raised_amount/goal_amount * 100),
    progress_bar = document.querySelector('.campaign-progress__bar--inner'),
    progress_duration = 2.5;

// Trigger animation on load
window.onload = animateCampaignProgress();

function animateCampaignProgress() {
  //Create new CountUp instance
  var count_up = new CountUp(raised_amount_el, 0, raised_amount, 0, progress_duration, {});
  // Animate the total raised number
  if (!count_up.error) {
    count_up.start();
  } else {
    console.error(demo.error);
  }
  // Animate the progress bar
  TweenLite.to(progress_bar, progress_duration, { width: percent_raised + '%' });
}

function resetCampaignProgress() {
  // Reset the total raised number
  raised_amount_el.innerHTML = '0';
  // Reset the progress bar
  progress_bar.style.width = 0;
}

</script>

	</div>
</section>



@endsection