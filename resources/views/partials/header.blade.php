<header class="banner">
  <div class="container header">
    <div>
      <a class="menu" href="{{ home_url('/') }}">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/menu.png">
      </a>
      <a class="brand" href="{{ home_url('/') }}">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/logo.png">
      </a>
    </div>
    

    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @endif
    </nav>
  </div>
</header>
