<div class="container">
	<div class="section">
		@php
		$the_query = new WP_Query( array(
			'post_type' => 'cases', 'posts_per_page' => 10
		));
		@endphp
		@if ( $the_query->have_posts() )

		<div class="section-header">
			Cases
		</div>

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
</div>
