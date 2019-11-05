@if (has_post_thumbnail())
	<div class="section__hero {{ $sectionClass ?? '' }}">
		<figure class="hero__figure {{ $figureClass ?? '' }}">
		    {{the_post_thumbnail( 'hero_lg', array( 'class' => 'hero__image' ) )}}
		</figure>

		@isset ($showBadge)
		@php
			$title = get_field( 'rotator_title' );
			$content = get_field( 'rotator_content' );
		@endphp
		@isset ($title)
			<div class="jumbotron">
				<p class="mb-1">
					{{ $title }}
				</p>
				
				@if (get_field( 'rotator_words' ))
					<div class="jumbotron__rotator">
					@while (have_rows('rotator_words'))
						@php the_row(); @endphp
						<span class="jumbotron__word">{{ the_sub_field( 'word' ) }}	</span>
					@endwhile
					</div>
				@endif
				{!! $content !!}
			</div>
			@endisset
		@endisset

	</div>

	
@endif