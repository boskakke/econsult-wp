@php
$hero_image = get_field('hero_image');
$summary = get_field( 'page_summary' );

@endphp


<div class="hero-about">

	@include('partials.header')


	<div class="hero-about__grid">
		<div class="hero-about__left">
			@if ($summary)
				<h1 class="hero-about__title">
					{!! $summary !!}
				</h1>
			@endif

		</div>

		<figure class="hero-about__figure">
			{!! wp_get_attachment_image( $hero_image, 'hero', false,  array('class' => 'hero-about__image' )) !!}
		</figure>
	</div>
</div>
