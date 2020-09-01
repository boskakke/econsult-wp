@php
$image = get_field('image');
$image_2 = get_field('image_2');
$title = get_field( 'rotator_title' );

@endphp


@include('partials.header')
<div class="hero-fp">

	<div class="hero-fp__content">
	<div class="hero-fp__trumpet block">
		{{$title}}
	</div>
	<h1 class="hero-fp__words">
		@if( have_rows('rotator_words') )
		@while ( have_rows('rotator_words') ) @php
		the_row();
		$word = get_sub_field('word');
		@endphp
		<span class="word">
			<svg class="hero-fp__check"
			viewBox="0 0 46 35"
			xmlns="http://www.w3.org/2000/svg">
			<use xlink:href="@asset('images/sprite.svg')#check"></use>
		</svg>{{$word}}</span>
		@endwhile
		@endif
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







