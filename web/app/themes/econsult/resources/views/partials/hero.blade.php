@if (get_the_post_thumbnail())
<div class="page-hero fadeUp">
	<figure class="page-hero__figure">
		@php
			the_post_thumbnail('post-thumbnail', ['class' => 'page-hero__image']);
		@endphp
	</figure>
</div>
@endif
