{{-- <header class="banner">


	@if (has_nav_menu('primary_navigation'))
	  {!! wp_nav_menu($primarymenu) !!}
	@endif

</header> --}}

<header class="banner navbar navbar-default navbar-static-top" role="banner">
{{--   <div class="container"> --}}
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?=__('Toggle navigation', 'sage');?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ home_url('/') }}">
    	<img alt="Brand" style="max-width: 100px;" src="/wp-content/themes/hns/resources/assets/images/logo_small.png">
    </a>
    @if (has_nav_menu('primary_navigation'))
	  {!! wp_nav_menu($primarymenu = array(
	  		'menu'           => 'main-menu',
    'theme_location' => 'main-menu',
    'menu_id'        => 'navigation',
    'depth'          => 0,
    'container'      => false,
    'menu_class'     => 'nav',
    //Process nav menu using our custom nav walker
        'walker'          => new \App\wp_bootstrap4_navwalker(),
        'theme_location'  => '',
	  	)) !!}
	@endif
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
	@if (has_nav_menu('primary_navigation'))
	  {!! wp_nav_menu($primarymenu) !!}
	@endif
</nav>
{{--   </div> --}}
</header>
<style>
.navbar-toggle{
	float: right;
}


#menu-navigation {
	display: flex;
	float: right;
}

.navbar-header{
	width: 100%!important;
}

.nav{
    margin-top: 2rem;
    float: right;
}
</style>