@if( have_rows('flex_elements') )
@while ( have_rows('flex_elements') )
@php
the_row()
@endphp
@if( get_row_layout() == 'section_bullets' )
<div class="container">
	<div class="section-bullets fadeUp">
		<div class="section-bullets__col section-bullets__col--left">
			@if( have_rows('repeater_bullets_left'))
			<ul class="list list-bullets list-bullets--left">
				@while ( have_rows('repeater_bullets_left') )
				@php
				the_row()
				@endphp
				<li class="list-bullets__item">
					<h3 class="list-bullets__header">
						{{ the_sub_field('txt_header') }}
					</h3>
					<p>{{ the_sub_field('txt_summary') }}</p>
				</li>
				@endwhile
			</ul>
			@endif
		</div>


		@php
		$image = get_sub_field('img_picture');
		$size = 'full;'
		@endphp

		<div class="section-bullets__illu">
			{!! wp_get_attachment_image( $image, $size, "") !!}
		</div>


		<div class="section-bullets__col">

			@if( have_rows('repeater_bullets_right') )

			<ul class="list list-bullets list-bullets--right">

				@while ( have_rows('repeater_bullets_right') )
				@php
				the_row()
				@endphp

				<li class="list-bullets__item">
					<h3 class="list-bullets__header">
						{{ the_sub_field('txt_header') }}
					</h3>
					<p>{{ the_sub_field('txt_summary') }}</p>
				</li>

				@endwhile

			</ul>

			@endif
		</div>
	</div>
</div>





@elseif( get_row_layout() == 'avout_e-consult' )

@php
$about_image = get_sub_field('image');
@endphp

<div class="deck-about">

		<div class="deck-about__left">
			<div class="deck-about__content">
				<h2 class="deck-about__title">
					{!! the_sub_field('title') !!}
				</h2>
				<div class="deck-about__text mb-2">
					{!! the_sub_field('content') !!}
				</div>
				<a href="{!! the_sub_field('link') !!}" class="button button--primary-border button--icon-right">
				<span>
					{!! the_sub_field('cta') !!}
				</span>
					<svg class="button__arrow"
					viewBox="0 0 24 24"
					xmlns="http://www.w3.org/2000/svg">
					<use xlink:href="@asset('images/sprite.svg')#arrow-right"></use>
				</svg>
			</a>
		</div>
	</div>
	<div class="deck-about__right">
		<figure class="deck-about__figure">
			{!! wp_get_attachment_image( $about_image, 'hero', "", array( 'class' => 'deck-about__image' )) !!}
		</figure>
	</div>
</div>






@elseif( get_row_layout() == 'services')

@include('partials.content-teasers')

@elseif( get_row_layout() == 'cases_slider' )


@php
$the_query = new WP_Query( array(
	'post_type' => 'cases', 'posts_per_page' => 10
));
@endphp

@if ( $the_query->have_posts() )

<div class="deck">
	
	<div class="grid--1col">
		<div class="grid__item">
			<h2 class="deck__title">
				Cases
			</h2>
		</div>
	</div>

	<div class="grid--3col">
		@while ( $the_query->have_posts() )
		@php
		$the_query->the_post()
		@endphp
		<div class="grid__item">
				<article class="teaser teaser--case">
				<figure class="teaser__figure">
					{{the_post_thumbnail( 'hero', array( 'class' => 'teaser__image' ) )}}
				</figure>
				<div class="teaser__body">
					<h2 class="teaser__title">
						{{ the_title() }}
					</h2>

					<a href="{{ the_permalink() }}" class="teaser__readmore">
					<span>Læs case</span>
					<svg class="button__arrow"
						viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg">
						<use xlink:href="@asset('images/sprite.svg')#arrow-right"></use>
					</svg>
					</a>
				</div>
			</article>
		</div>

	@endwhile
	</div>

</div>


@php
wp_reset_postdata();
@endphp
@endif


@endif

@endwhile

@else

// no layouts found

@endif
