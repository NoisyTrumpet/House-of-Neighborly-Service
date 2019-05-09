<footer class="content-info">
{{--     @php dynamic_sidebar('sidebar-footer') @endphp --}}
@query([
  'post_type' => 'post',
  'posts_per_page' => 1

])
<div class="container">

@posts
<div class="footer-card">
	<div class="footer-blog-header">
	<h3 class="footer-blog-title">Our Impact</h3>
	<a href="/get-involved" class="footer-blog-learn-more">Learn More</a>
	</div>
	<div class="block">
		<div class="img-top">
			@thumbnail('full')
		</div>
		<category> @category</category>

<time class="entry-time">
  <span>@published('F j, Y')</span>
  <span itemprop="datePublished" content="@published('c')"></span>
</time>
<h2 class="entry-title">@title</h2>

<exceprt class="entry-excerpt">
	@excerpt
	</exceprt>
	</div>

</div>
@endposts
</div>






</footer>
