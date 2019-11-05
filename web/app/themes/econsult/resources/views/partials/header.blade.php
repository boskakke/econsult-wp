<div class="container">
	<div class="header ">
		<div class="header__col--logo">
			<a href="{{ home_url('/') }}" class="header__logo" title="{{ get_bloginfo('name', 'display') }}">
				<?php bloginfo('name'); ?>
			</a>
		</div>

		<div class="header__col--menu">
			<div class="menu-wrapper">
				@if (has_nav_menu('primary_navigation'))
				{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-menu']) !!}
				@endif
			</div>
		 </div>
		 <div class="menu-toggle">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>

<div class="container hidden-md-up">
	<div class="contact__mobile">
		<i class="icon-phone green mr-1"></i>{{ the_field('txt_phone', 'options') }}
	</div>
</div>
