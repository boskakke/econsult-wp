@php
$template = get_field('radio_page_category')
@endphp

<div class="page">
<div class="container">
	<h1 class="page-title">
		@php
		the_title();
		@endphp
	</h1>
</div>

	<div class="container">
		<div class="page__content">
			<div class="grid__item">
				@php the_content() @endphp
			</div>
			<div class="page__sidebar">
				@php
				dynamic_sidebar('sidebar-other')
				@endphp
			</div>
		</div>

	</div>
</div>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
