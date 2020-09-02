@php
$image = get_field('image');
$image_2 = get_field('image_2');
$title = get_field( 'rotator_title' );

@endphp


@include('partials.header')
<div class="article__content" style="--grid-gap: 0">
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


			{{-- <figure class="hero-fp__logo">
				<svg class="hero-fp__svg"
				viewBox="0 0 103 103"
				xmlns="http://www.w3.org/2000/svg">
				<use xlink:href="@asset('images/sprite.svg')#logo_house"></use>
			</svg>
		</figure> --}}
	</div>








	<div class="hero-fp">


	</div>

