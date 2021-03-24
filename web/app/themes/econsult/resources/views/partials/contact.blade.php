@php
	$contact_header = get_field( 'contact_title', 'options' );
	$contact_description = get_field( 'contact_summary', 'options' );
@endphp
<section class="deck deck--primary mb-0">
	@if ($contact_header)
	<div class="grid--1col">
		<div class="grid__item">
			<h2 class="deck__title">
				{{ $contact_header }}
			</h2>
			@if ($contact_description)
			<p class="deck__description">
				{!! $contact_description !!}
			</p>
			@endif
		</div>
	</div>
	@endif

	
	@php dynamic_sidebar('contact') @endphp
	


</section>
