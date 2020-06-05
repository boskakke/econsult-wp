<div class="mobile-nav__curtain"></div>
<div class="mobile-nav">
	<div class="mobile-nav__logo">
		 	<svg class="mobile-nav__svg"
				viewBox="0 0 201 36"
				xmlns="http://www.w3.org/2000/svg">
				<use xlink:href="@asset('images/sprite.svg')#logo--front"></use>
			</svg>
	</div>
	<div class="mobile-nav__top">
		@php dynamic_sidebar('sidebar-mobile-nav-top') @endphp
	</div>
	<div class="mobile-nav__bottom">
		@php dynamic_sidebar('sidebar-mobile-nav-bottom') @endphp
	</div>
</div>

