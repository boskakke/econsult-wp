@php
	$summary = get_field('case_summary');
@endphp

<article @php post_class('section--content article__content page') @endphp>
	<div class="cases__header">
		@if ( function_exists('yoast_breadcrumb') )
			@php  yoast_breadcrumb( '<div class="breadcrumbs">','</div>' ); @endphp
		@endif
		<h1 class="page-title">
			@php
			the_title();
			@endphp
		</h1>
		@if ($summary)
			<div class="case__summary">
				{!! $summary !!}
			</div>
		@endif

	</div>

@include('partials.hero')


	@if( have_rows('content') )


	@while ( have_rows('content') )
	@php
	the_row();
	@endphp


	@if( get_row_layout() == 'brodtekst' )
		@php
		$content = get_sub_field('brodtekst');
		$fact = get_sub_field('faktaboks');
		$image = get_sub_field('billede');
		@endphp

		<div class="cases__content">
			<div class="grid__item">
				{!! $content !!}

			</div>
			<div class="page__sidebar">
			</div>


		</div>

		@if ($image)
		<div class="cases__content--wide mb-2">

			<aside class="fact">

				<figure class="post-figure fadeUp">
				{!! wp_get_attachment_image( $image, "case-lg", "", array( "class" => "cases-gallery__img" )) !!}
				<figcaption class="post-figure__caption">
					{!! $fact !!}
				</figcaption>
				</figure>


			</aside>

	</div>
		@endif


	@elseif( get_row_layout() == 'billede' )

			@php
			$image = get_sub_field('billede');
			$imgSize = "case-lg";
			@endphp
			<div class="cases__content fadeUp">

					{!! wp_get_attachment_image( $image, $imgSize, "", array( "class" => "cases-gallery__img" )) !!}

			</div>

	@endif


	@endwhile


	@else


	@endif


	@if( have_rows('repeater_images') )

		<div class="cases__content">
	<div class="cases-gallery fadeUp">
		<h4 class="cases-gallery__title">
			Galleri
		</h4>
		@while ( have_rows('repeater_images') ) @php the_row(); @endphp
		@php
		$image = get_sub_field( 'image' );
		$large_image = wp_get_attachment_image_src(get_sub_field('image'), 'case-lg');
		$size = 'case';
		@endphp
		<figure class="cases-gallery__item">
			<a href="<?php echo $large_image[0]; ?>" data-fancybox="gallery">
				{!! wp_get_attachment_image( $image, $size, "", array( "class" => "cases-gallery__img" )) !!}
			</a>
		</figure>
		@endwhile
	</div>
</div>

	@endif

</div>


</article>
















</article>
