@php
$posts = get_field('related');
$title = get_field( 'deck_header' );
$description = get_field( 'deck_description' );

@endphp
@if( $posts )
{{ $class ?? '' }}
<div class="deck-teasers">
	<h3 class="section__header">
		{{ $title }}
	</h3>
	<p class="section__description">{!! $description !!}</p>
</div>
<div class="teaser-flow">
	@foreach( $posts as $p )
	<div class="grid__item">
		<article class="teaser-card fadeUp">
			<a href="{{ get_permalink( $p->ID) }}" title="{{ get_the_title($p->ID) }}" aria-label="{{ get_the_title($p->ID) }}" class="teaser-card__overlaylink"></a>
			@if (get_the_post_thumbnail($p->ID ))
			<figure class="teaser-card__figure">
				{!! get_the_post_thumbnail( $p->ID, 'teaser_lg', array( 'class' => 'teaser-card__image', 'loading' => 'lazy', 'alt' => get_the_title($p->ID)) ) !!}
			</figure>
			@endif
			<div class="teaser-card__body">
				<h3 class="teaser-card__header">
					{{ get_the_title($p->ID) }}
				</h3>
				<p>{{ get_the_excerpt($p->ID) }}</p>
				<a href="{{ get_permalink($p->ID) }}" class="teaser-card__readmore">
					<span>Læs mere</span>
				</a>
			</div>
		</article>
	</div>
	@endforeach
</div>
@endif
