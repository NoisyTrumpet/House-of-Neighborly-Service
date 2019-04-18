<header class="banner">

    <a class="brand" href="{{ home_url('/') }}">
    	<img alt="Brand" style="max-width: 100px;" src="/wp-content/themes/hns/resources/assets/images/logo_small.png">
    </a>
	@if (has_nav_menu('primary_navigation'))
	  {!! wp_nav_menu($primarymenu) !!}
	@endif

</header>