@php
	$template = get_field('radio_page_category');
@endphp

@if($template)

<div class="tabs">
	<div class="tabs__top">
		
		<ul class="main-tabs">
			<li class="main-tabs__item <?php if($template == 'private'): ?> active <?php endif; ?>" data-tab="privat">
				<a href="#" class="main-tabs__link">
					Privat 
				</a>
			</li>
			<li class="main-tabs__item <?php if($template == 'business'): ?> active <?php endif; ?>" data-tab="erhverv">
				<a href="#" class="main-tabs__link ">
					Erhverv
				</a>
			</li>
		</ul>

		@if(get_field('txt_phone','options'))
		<div class="contact__desktop ">
			<div class="p-2">
				Kontakt os for et uforpligtende tilbud
			</div>
			<div class="p-2 font-30 ml-1">
				<i class="icon-phone green mr-1"></i> {{ the_field('txt_phone','options') }}
			</div>  
		</div>
		@endif	
	</div>
	<div class="tabs__bottom">
		@php
		$menu_private_class =     'tabs-menu';
		$menu_business_class =    'tabs-menu';
		if ($template ==  'private') {
			$menu_private_class .= ' active';
		} else {
			$menu_business_class .= ' active';
		}
		@endphp
		
		{!! 
			wp_nav_menu(['menu' => 'private_navigation', 'menu_class' => $menu_private_class , 'menu_id' => 'privat', 'container' => false, 'container_id' => 'privat']) !!}	
			

			{!! 
				wp_nav_menu(['menu' => 'business_navigation', 'menu_class' => $menu_business_class, 'menu_id' => 'erhverv', 'container' => false, 'container_id' => 'business']) !!}	
			</div>
</div>

@endif