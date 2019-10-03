<div class="section--content ">
	@if( have_rows('repeater_news_left') )
	<div class="teaser-main">
		@while ( have_rows('repeater_news_left') ) 
		@php
		the_row()
		@endphp

		<article class="teaser mb-5">
			<a href="{{ the_sub_field('link') }}" class="teaser__link">
				<h1 class="teaser__header teaser__header--h1">
					{{ the_sub_field('txt_header') }}
				</h1>

				<div>{{ the_sub_field('txt_summary') }}</div>

				<div class="button button--primary button--fancy button--md">
					<span title="Læs mere">Læs mere</span>
				</div>
			</a>
		</article>

		@endwhile
	</div>
	@endif

	


	@if( have_rows('repeater_news_right') )

	<div class="teasers-small">

		@while ( have_rows('repeater_news_right') )
		@php
		the_row()
		@endphp

		@php

		$image = get_sub_field('image');
		$size = 'hero-sm';
		@endphp

		<article class="teaser teaser-overlay">
			<a href="{{ the_sub_field('link') }}" class="teaser__link">
				<figure class="teaser__figure">
					{!! wp_get_attachment_image( $image, $size, "") !!}
				</figure>
				<div class="teaser__body">
					<h3 class="teaser__header">
						{{ the_sub_field('txt_header') }}
					</h3>
					<p>{{ the_sub_field('txt_summary')  }} </p>
					<div class="button button--primary button--fancy button--md">
						<span title="Læs mere">Læs mere</span>
					</div>
				</div>
			</a>
		</article>

		@endwhile
	</div>
	@endif

</div>