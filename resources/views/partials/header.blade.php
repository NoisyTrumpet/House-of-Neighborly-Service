<header class="banner navbar navbar-default navbar-statci-top" role="banner">
    <a class="navbar-brand" href="{{ home_url('/') }}">
        <img id="nav-logo" alt="Brand" style="max-width: 100px;" src="/wp-content/themes/hns/resources/assets/images/logo_small.png">
    </a>
    <div class="navbar-header" >
        <a><i class="fas fa-bars navbar-hamburger" data-toggle="collapse" data-target=".navbar-collapse">
        </i></a>

    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif

    </div>

    <nav class="collapse navbar-collapse hamburger" role="navigation">
	@if (has_nav_menu('primary_navigation'))
	  {!! wp_nav_menu($primarymenu) !!}
	@endif
    </nav>
    <div class="donate-button">
        <a href="/donate">Donate</a>
    </div>
</header>