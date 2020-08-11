@php
if(is_front_page()) {
	$headerClass = 'header--frontpage';
	$logo = 'logo';
} else {
	$headerClass = '';
	$logo = 'logo';
}
@endphp
<div class="header {{$headerClass}}">
	<div class="header__col--logo">
		<a href="{{ home_url('/') }}"  title="{{ get_bloginfo('name', 'display') }}">
			<svg class="header__col--svg"
			viewBox="0 0 201 36"
			xmlns="http://www.w3.org/2000/svg">
			<use xlink:href="@asset('images/sprite.svg')#{{$logo}}"></use></svg>
		</a>
	</div>

	<div class="header__col--menu">
		<div class="menu-wrapper">
			@if (has_nav_menu('primary_navigation'))
			{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-menu']) !!}
			@endif
		</div>
	</div>
	<div class="header__col--hamburger">
		<button class="hamburger" type="button" aria-label="Menu" aria-controls="navigation" aria-expanded="false">
			<svg id="burger" class="hamburgersvg" width="30" class="openmenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
				<path class="top" d="M0 9h30v2H0z"/>
				<path class="bot" d="M0 19h30v2H0z"/>
			</svg>
		</button>
	</div>

	<div class="header__col--contact contact__mobile">
		<i class="icon-phone green mr-1"></i>{{ the_field('txt_phone', 'options') }}
	</div>
	@include('partials.mobile-nav')
</div>

