@php
	$template = get_field('radio_page_category');
@endphp

@if($template)

<div class="tabs">
	
	<div class="tabs__bottom">
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
</div>

@endif