@php
	$image = get_field('image');
	$title = get_field( 'title' );
	$content = get_field( 'content' );
	$link = get_field( 'link' );
@endphp
<article class="teaser-main">
	<div class="teaser-main__text">
		<h2 class="teaser-main__title block">
			{{ $title }}
		</h2>
		<div>{!! $content !!}</div>
		@php

		@endphp
		<a href="{{$link['url']}}" class="button button--primary">
			{{$link['title']}}
		</a>
	</div>

	<figure class="teaser-main__figure">
		{!! wp_get_attachment_image( $image, 'full', "", array( 'class' => 'teaser-main__image' )) !!}
	</figure>
</article>

