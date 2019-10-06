<div class="section section--content section--margin">
	<div class="teaser-main">
		<article class="teaser mb-5">
			<h1>
				{{ the_title() }}
			</h1>
			<div>{{ the_content() }}</div>
		</article>
	</div>
	@php
	$the_query = new WP_Query( array(
		'posts_per_page' => 3,
	)); 
	@endphp

	@if ( $the_query->have_posts() )
	<div class="teaser-flow">
		@while ( $the_query->have_posts() )
		@php
			$the_query->the_post()
		@endphp 
		@include('partials.content')
		@endwhile
		@php
		wp_reset_postdata();
		@endphp
	</div>
	@endif
</div>