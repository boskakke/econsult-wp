@if(have_rows('person'))
<section class="deck deck--sand mt-0">
	<div class="grid--1col">
		<div class="grid__item">
				<h2 class="deck__title">
					Hvem er vi
				</h2>		
		</div>
	</div>
	<div class="grid--4-2col">
	
		@while( have_rows('person') )
		<div class="grid__item">
		@php the_row(); @endphp

		<div class="person">
			@php
			$image = get_sub_field( 'image' );
			$name = get_sub_field( 'name' );
			$title = get_sub_field( 'title' );
			@endphp

			<figure class="person__figure">
				{!! $large_image = wp_get_attachment_image($image, 'staff'); !!}
			</figure>
			<div class="person__body">
				<h3 class="person__name">{{ $name }}</h3>
				<p class="person__jobtitle">{{ $title }}</p>
			</div>
			</div>
		</div>
		@endwhile
	</div>

</section>
@endif
