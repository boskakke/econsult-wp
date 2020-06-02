@php
	if(is_front_page()) {
		$headerClass = 'header--frontpage';
		$logo = 'logo--front';
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
		 <div class="menu-toggle">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
</div>

<div class="container hidden-md-up">
	<div class="contact__mobile">
		<i class="icon-phone green mr-1"></i>{{ the_field('txt_phone', 'options') }}
	</div>
</div>
