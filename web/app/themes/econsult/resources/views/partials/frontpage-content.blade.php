
@php
$image = get_field('teaser_main_image');
$title = get_field( 'title' );
$content = get_field( 'content' );
$link = get_field( 'link' );
@endphp
<div class="container" role="document">

	<article class="teaser-main">
		<div class="teaser-main__text">
			<div>{!! $content !!}</div>
			@php

			@endphp
			<a href="{{$link['url']}}" class="button button--primary">
				{{$link['title']}}
			</a>
		</div>

		<div class="teaser-main__item">
			<figure class="teaser-main__figure">
				{!! wp_get_attachment_image( $image, 'hero', "", array( 'class' => 'teaser-main__image' )) !!}
			</figure>
		</div>
	</article>
</div>
