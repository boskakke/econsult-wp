@php
	$image = get_field('img_hero');
@endphp

@if($image)
<div class="section section__hero">
	<figure class="hero__figure hero__figure--gradient">
		{{ the_post_thumbnail( 'hero_lg', array( 'class' => ' hero__image ', 'alt' => get_the_title() ) ) }}
	</figure>
</div>
@endif