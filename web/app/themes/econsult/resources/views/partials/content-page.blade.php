@php
	$template = get_field('radio_page_category')
@endphp
<div class="section--content article__content">
	<div class="single-article">
		<div class="single-article__left article-modules">
			<div class="entry-content">
				<h1 class="page__title">{{ the_title() }}</h1>
				@php the_content() @endphp
			</div>
		</div>

		<div class="single-article__right">
			@if($template == 'none')
				@php
					dynamic_sidebar('sidebar-other')
				@endphp
			@elseif($template == 'private')
				@php
					dynamic_sidebar('sidebar-private');
				@endphp

			@elseif($template == 'business')
				@php
					dynamic_sidebar('sidebar-business');
				@endphp
			@endif
		</div>
	</div>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>