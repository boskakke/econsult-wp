@php
	$contact_header = get_field( 'contact_title', 'options' );
	$contact_description = get_field( 'contact_summary', 'options' );
@endphp
<section class="section section--contact mb-0">

	@if ($contact_header)
	<h2 class="section__header section__header--fff">
			{{ $contact_header }}
	</h2>
	@endif
	@if ($contact_description)
	<p class="section__description section__description--fff">
		{!! $contact_description !!}
	</p>
	@endif
	@php dynamic_sidebar('contact') @endphp

</section>
