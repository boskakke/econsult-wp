@if (has_post_thumbnail())
	<div class="section__hero {{ $sectionClass ?? '' }}">
		<figure class="hero__figure {{ $figureClass ?? '' }}">
		    {{the_post_thumbnail( 'hero_lg', array( 'class' => 'hero__image' ) )}}
		</figure>
	</div>
@endif