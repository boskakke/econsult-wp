@php
	$summary = get_field( 'page_summary' );
@endphp

<article @php post_class('section--content article__content page') @endphp>

	<div class="article__header">
			<h1 class="article__title">
				@php
				the_title();
				@endphp
			</h1>
			@if ($summary)
				<p class="article__summary">
					{!! $summary !!}
				</p>
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
		</div>
		@if ($fact)
			<div class="cases__fact">
				<div class="grid__item">
					{!! $fact !!}
				</div>
			</div>
		@endif

		@if ($image)
		<div class="cases__content--wide mb-2">

			<aside class="fact">
				<figure class="post-figure fadeUp">
				{!! wp_get_attachment_image( $image, "case-lg", "", array( "class" => "cases-gallery__img" )) !!}
				</figure>
			</aside>
		</div>
		@endif



		@elseif( get_row_layout() == 'faktaboks' )

			@php
				$fact = get_sub_field('faktaboks');
			@endphp

			@if ($fact)
				<div class="cases__fact">
					<div class="grid__item">
						{!! $fact !!}
					</div>
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


		@elseif( get_row_layout() == 'billeder' )
			@php
			$image1 = get_sub_field('billede_1');
			$image2 = get_sub_field('billede_2');
			$imgSize = "case-lg";
			@endphp
			<div class="cases__content--2col fadeUp">
					{!! wp_get_attachment_image( $image1, $imgSize, "", array( "class" => "cases-gallery__img" )) !!}
			</div>
			<div class="cases__content--2col fadeUp">
				{!! wp_get_attachment_image( $image2, $imgSize, "", array( "class" => "cases-gallery__img" )) !!}
			</div>
		</div>

	@endif


	@endwhile


	@else


	@endif



</div>


</article>
















</article>
