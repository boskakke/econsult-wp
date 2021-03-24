@php
	$image = get_field('image');
	$image_2 = get_field('image_2');
	$title = get_field( 'rotator_title' );
@endphp

@include('partials.header')

<div class="hero ">
	<div class="hero__content">
		<h1 class="hero__title">
			{!! $title !!}
		</h1>
	</div>
</div>

<div class="deck">
	<div class="grid--hero-images">
	<div class="grid__item">
		<figure class="hero-fp__figure">
			{!! wp_get_attachment_image( $image, 'hero', false,  array('class' => 'hero-fp__image' )) !!}
		</figure>
	</div>
	<div class="grid__item">
		<figure class="hero-fp__figure">
			{!! wp_get_attachment_image( $image_2, 'hero', false,  array('class' => 'hero-fp__image' )) !!}
		</figure>
	</div>	
</div>
</div>