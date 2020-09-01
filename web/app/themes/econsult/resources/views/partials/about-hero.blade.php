@php
$hero_image = get_field('hero_image');
$title = get_field( 'hero_summary' );

@endphp


<div class="hero-about">

	@include('partials.header')


	<div class="hero-about__grid">
		<div class="hero-about__left">

			@if ( function_exists('yoast_breadcrumb') )
			@php  yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); @endphp
			@endif
			<h1 class="hero-about__title">
				{!! $title !!}
			</h1>
		</div>

		<figure class="hero-about__figure">
			{!! wp_get_attachment_image( $hero_image, 'hero', false,  array('class' => 'hero-about__image' )) !!}
		</figure>
	</div>
</div>
