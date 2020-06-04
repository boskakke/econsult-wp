<section class="section section--teasers mb-0">
<div class="container">
	<h2 class="section__header">
		{!! the_field( 'contact_title', 'options' );!!}
	</h2>
	<p class="section__summary">{!! the_field( 'contact_summary', 'options' );!!}</p>

	@php dynamic_sidebar('contact') @endphp
</div>
</section>
