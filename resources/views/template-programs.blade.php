{{--
  Template Name: Programs Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
<section id="programs">
    <div class="programs-wrapper">
    <div class="container">
    	{{-- <h2>Programs</h2> --}}
      <div class="row hidden-md-up">
        <div class="col-md-6">
          <div class="card" data-aos="fade-right"
{{--     data-aos-offset="200"
 --}}    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center" class="container capital-campaign-home">
            <div class="card-block">
            	<img class="card-img-top" src="@asset('images/programs/family-support.jpg')" alt="Card image cap">
              <h4 class="card-title text-center">Family Support</h4>
              <h6 class="card-subtitle text-muted text-center">{!! get_field('family_support_text') !!}</h6>
              <a href="/family-support" ><button class="card-link hvr-grow">Learn More</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" data-aos="fade-left"
{{--     data-aos-offset="200"
 --}}    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center" class="container capital-campaign-home">
            <div class="card-block">
            	<img class="card-img-top" src="@asset('images/programs/child-development.jpg')" alt="Card image cap">
              <h4 class="card-title text-center">Child Development</h4>
              <h6 class="card-subtitle text-muted text-center">{!! get_field('child_development_text') !!}</h6>
              <a href="/child-development"><button class="card-link hvr-grow">Learn More</button></a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" data-aos="fade-right"
{{--     data-aos-offset="200"
 --}}    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center" class="container capital-campaign-home">
            <div class="card-block">
            	<img class="card-img-top" src="@asset('images/programs/senior-health.jpg')" alt="Card image cap">
              <h4 class="card-title text-center">Senior Health</h4>
              <h6 class="card-subtitle text-muted text-center">{!! get_field('senior_health_text') !!}</h6>
              <a href="/senior-health"><button class="card-link hvr-grow">Learn More</button></a>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card" data-aos="fade-left"
{{--     data-aos-offset="200"
 --}}    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center" class="container capital-campaign-home">
            <div class="card-block">
            	<img class="card-img-top" src="@asset('images/programs/food-security.jpg')" alt="Card image cap">
              <h4 class="card-title text-center">Food Security</h4>
              <h6 class="card-subtitle text-muted text-center">{!! get_field('food_security_text') !!}</h6>
              <a href="/food-security"><button class="card-link hvr-grow">Learn More</button></a>
            </div>
          </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection

