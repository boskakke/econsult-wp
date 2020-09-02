@php
$template = get_field('radio_page_category');
$summary = get_field( 'page_summary' );
@endphp

<article class="page article__content">
	<div class="article__header">
			<h1 class="article__title">
				@php
				the_title();
				@endphp
			</h1>
			@if ($summary)
				<p class="article__summary">
					{!! $summary !!}
				</p>
			@endif
	</div>

	@include('partials.hero')
		<div class="page__sidebar">
				@php
				dynamic_sidebar('sidebar-other')
				@endphp
		</div>
		<div class="page__content">
			<div class="grid__item">
				@php the_content() @endphp
			</div>

		</div>
</article>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
