@if(have_rows('person'))
<section class="section section--staff section--padding mb-0">

	<h2 class="section__header">Medarbejdere</h2>

	<div class="person-grid">
		@while( have_rows('person') )
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
		@endwhile
	</div>

</section>
@endif
