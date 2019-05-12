<footer class="content-info">
{{--     @php dynamic_sidebar('sidebar-footer') @endphp --}}
	@query([
	  'post_type' => 'post',
	  'posts_per_page' => 1,
	  'cat' => '3'

	])

	<div class="container">
		@posts
			<div class="footer-card">
				<div class="footer-blog-header">
				<h3 class="footer-blog-title">Our Impact</h3>
				<a href="/get-involved" class="footer-blog-learn-more">Learn More</a>
				</div>
				<a href="@permalink">
				<div class="block">
					@php
	// Get the ID of a given category
    $category_id = get_cat_ID( 'Category Name' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
	@endphp
				@thumbnail('full')
					<div class="entry">
						<h4 class="entry-title">@title</h4>
						<div class="entry-excerpt">@excerpt</div>
						<span class="category"><a href="{!! $category_link !!}">@category</a></span>
						<time class="entry-time">
					  	<span>@published('F j, Y')</span>
					  	<span itemprop="datePublished" content="@published('c')"></span>
						</time>
					</div>
				</div>
				</a>
			</div>
		@endposts
		@php(wp_reset_query())
	</div>
	<div class="footer-newsletter">
		<h1 class="newsletter-title">Stay Connected!</h1>
		<p class="newsletter-subtitle">{!! get_field('newsletter_subtitle') !!}</p>
		<div class="container">
		<div class="form">
		@shortcode('[gravityform id="2" title="false" description="false"]')
		</div>
	</div>
	</div>
	<div class="container">
		<div class="footer-menu">
			<a class="footer-brand hvr-grow" href="{{ home_url('/') }}">
		        <img id="footer-logo" alt="Brand" style="max-width: 300px;" src="/wp-content/themes/hns/resources/assets/images/logo_small.png">
		    </a>
		    <a href="https://donorbox.org/capital-campaign-18" class="custom-dbox-popup">
	    		<button class="donation-button hvr-grow">Donate</button>
	    	</a>
	    	<div class="menu row">
	    		<div class="col-xs-6 col-sm-6 col-md-3">
	    			<a href="/about" class="footer-menu-link"><h5>Our Story</h5></a>
	    			<a href="/capital-campaign" class="footer-menu-sub-link"><p>Capital Campaign</p></a>
	    			<a href="/our-team" class="footer-menu-sub-link"><p>Our Team</p></a>
	    			<a href="/board-of-directors" class="footer-menu-sub-link"><p>Board of DIrectors</p></a>
	    		</div>
	    		<div class="col-xs-6 col-sm-6 col-md-3">
	    			<a href="/programs" class="footer-menu-link"><h5>Programs</h5></a>
	    			<a href="/family-support" class="footer-menu-sub-link"><p>Family Support</p></a>
	    			<a href="/child-development" class="footer-menu-sub-link"><p>Child Development</p></a>
	    			<a href="/senior-health" class="footer-menu-sub-link"><p>Senior Health</p></a>
	    			<a href="/food-security" class="footer-menu-sub-link"><p>Food Security</p></a>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-md-3">
	    			<a href="/our-impact" class="footer-menu-link"><h5>Our Impact</h5></a>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-md-3">
	    			<a href="/get-involved" class="footer-menu-link"><h5>Get Involved</h5></a>
	    			<a href="/events-calendar" class="footer-menu-sub-link"><p>Events Calendar</p></a>
	    		</div>
	    		<div class="col-xs-12 col-sm-12 col-lg-12 col-xl-12">
	    			<a href="/contact" class="footer-menu-link"><h5>Contact Us</h5></a>
	    			<a href="https://goo.gl/maps/ohywM4iDjYtbjQRh8" class="footer-menu-sub-link">
	    			<p>407 N. Calaveras<br>
					San Antonio, TX 78207
					</p>
					</a>
					<a href="tel:210.434.2301" class="footer-menu-sub-link">
						<p>(210) 434-2301</p>
					</a>

	    		</div>
	    		<div class="container">
	    		<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.9194804508247!2d-98.52667838489916!3d29.431149682109538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c5f291ab01235%3A0x1e2e961e60f7a265!2sHouse+of+Neighborly+Services!5e0!3m2!1sen!2sus!4v1557348478298!5m2!1sen!2sus" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	</div>
	    	</div>
		</div>
	</div>
	<div class="footer-bottom">
		<p style="text-align: center;">
			<a href="https://www.facebook.com/HNSToday/"><i class="fab fa-facebook"></i></a>
			<a href="mailto:executive.director@hns-tx.org"><i class="far fa-envelope"></i></a>
		</p>
		<p class="copyright">House of Neighborly Service© {!! date('Y') !!} All Rights Reserved</p>
	</div>


</footer>