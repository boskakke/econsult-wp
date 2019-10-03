<div class="section mt-5 mb-10">
		
	<div class="section-header">
		Cases
	</div>

	<div class="cases-container">				
		@php
			$args = array( 'post_type' => 'cases', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
		@endphp
		@while ( $loop->have_posts() ) @php	$loop->the_post()	@endphp
			<article class="cases-container__item case">
				
				<a href="{{ the_permalink() }}" class="case__link">
					<figure class="case__figure">
						{{ the_post_thumbnail( 'case', array( 'class' => ' hero__image ', 'alt' => get_the_title() ) ) }}
					</figure>
					<div class="case__body">
						<h3 class="case__header">
							{{ the_title() }}
						</h3>
						<div class="case__icon">
							<i class="bbicon-arrow-right"></i>		
						</div>
					</div>
				</a>
			</article>
		@endwhile
	</div>
</div>