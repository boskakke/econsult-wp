@php
$image = get_field('image');
$image_2 = get_field('image_2');
$title = get_field( 'rotator_title' );

@endphp


@include('partials.header')
<div class="article__content">
	<div class="article__header">
		<h1 class="article__title">
			{!! $title !!}
		</h1>
		</div>
	</div>
	<div class="hero-fp__illu">
		<div class="grid__item">
			<figure class="hero-fp__figure">
				{!! wp_get_attachment_image( $image, 'hero', false,  array('class' => 'hero-fp__image' )) !!}
			</figure>
		</div>
		<div class="grid__item">
			<figure class="hero-fp__figure--2">
				{!! wp_get_attachment_image( $image_2, 'hero', false,  array('class' => 'hero-fp__image' )) !!}
			</figure>
		</div>
	</div>
