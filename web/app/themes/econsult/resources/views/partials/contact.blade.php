@php
	$contact_header = get_field( 'contact_title', 'options' );
	$contact_description = get_field( 'contact_summary', 'options' );
@endphp
<section class="section section--teasers mb-0">
<div class="container">
	@if ($contact_header)
	<h2 class="section__header">
			{{ $contact_header }}
	</h2>
	@endif
	@if ($contact_description)
	<p class="section__description">
		{!! $contact_description !!}
	</p>
	@endif

	@php dynamic_sidebar('contact') @endphp
</div>
</section>
