@php
	$posts = get_field('related');
@endphp
@if( $posts )
{{ $class ?? '' }}
	<div class="section">
		<h3 class="section-header">
				Vores ydelser
			</h3>
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
	</div>
@endif
