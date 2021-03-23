@php
$posts = get_field('related');
$title = get_field( 'deck_header' );
$description = get_field( 'deck_description' );

@endphp
@if( $posts )
{{ $class ?? '' }}
<div class="deck deck--overlap deck--sand">
	<div class="grid--1col">
		<div class="grid__item">
			<h2 class="deck__title">
				{{ $title }}
			</h2>
			<p class="deck__description">{!! $description !!}</p>
		</div>
	</div>

	<div class="grid--3col">
		@foreach( $posts as $p )
		<div class="grid__item">
			<article class="teaser teaser--service">
				<a href="{{ get_permalink( $p->ID) }}" title="{{ get_the_title($p->ID) }}" aria-label="{{ get_the_title($p->ID) }}" class="teaser__link"></a>
				
				@if (get_the_post_thumbnail($p->ID ))
					<figure class="teaser__figure">
						{!! get_the_post_thumbnail( $p->ID, 'teaser_lg', array( 'class' => 'teaser__image', 'loading' => 'lazy', 'alt' => get_the_title($p->ID)) ) !!}
					</figure>
				@endif
				<div class="teaser__body">
					<h3 class="teaser__title">
						{!! get_the_title($p->ID) !!}
					</h3>
					<p class="teaser__summary">{{ get_the_excerpt($p->ID) }}</p>
					
					<span class="teaser__readmore">
						<span>Læs mere</span>
						<svg class="button__arrow"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="@asset('images/sprite.svg')#arrow-right"></use>
						</svg>
					</span>
				</div>
			</article>
		</div>
		@endforeach
	</div>
	@endif
</div>