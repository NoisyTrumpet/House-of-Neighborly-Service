{{--
  Template Name: Contact
   Template
--}}
@extends('layouts.app')
@section('content')
	@include('partials.hero')
	<section id="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 contact-col">
					<h3 class="contact-title">How to Reach Us</h3>
					<a href="tel:210.434.2301" class="contact-link">
					<h5 class="contact-info">
					<span class="fa-stack fa-lg icon-background">
						<i class="fas fa-phone fa-stack-1x"></i>
					</span>
					(210) 434-2301</h5>
					</a>

					<a href="fax:+210.434.2309" class="contact-link">
					<h5 class="contact-info">
					<span class="fa-stack fa-lg icon-background">
						<i class="fas fa-fax fa-stack-1x"></i>
					</span>
					(210) 434-2309</h5>
					</a>

					<a href="mailto:executive.director@hns-tx.org" class="contact-link">
					<h5 class="contact-info">
					<span class="fa-stack fa-lg icon-background">
						<i class="far fa-envelope fa-stack-1x"></i>
					</span>
					executive.director@hns-tx.org</h5>
					</a>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 contact-col">
					<h3 class="contact-title">Where to Visit Us</h3>
					<a href="https://goo.gl/maps/ohywM4iDjYtbjQRh8" class="contact-link">
					<h5 class="contact-info">
					<span class="fa-stack fa-lg icon-background">
						<i class="fas fa-globe-americas fa-stack-1x"></i>
					</span>
					House of Neighborly Service<br><span id="addressBottom">407 N. Calaveras Street</span><br><span id="addressBottom">San Antonio, Texas 78207</span></h5>
					</a>
				</div>
				<div class="col-12 contact-col">
					<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.9194804508247!2d-98.52667838489916!3d29.431149682109538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5f291ab01235%3A0x1e2e961e60f7a265!2sHouse+of+Neighborly+Services!5e0!3m2!1sen!2sus!4v1557348478298!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-12 contact-col">
					<h2 class="contact-title">Send Us a Message</h2>
					<div class="form">
					@shortcode('[gravityform id="3" title="false" description="false"]')
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
