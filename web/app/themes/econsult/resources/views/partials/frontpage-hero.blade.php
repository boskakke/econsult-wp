@php
$image = get_field('image');
$title = get_field( 'rotator_title' );

@endphp


<div class="hero-fp">
	@include('partials.header')
	<div class="hero-fp__curtain"></div>
	<div class="hero-fp__inner">
		<div class="hero-fp__content">
			<div class="hero-fp__trumpet block">
      	{{$title}}
    	</div>
    	<h1 class="hero-fp__words">
    	  @if( have_rows('rotator_words') )
    	  @while ( have_rows('rotator_words') ) @php
    	  the_row();
    	  $word = get_sub_field('word');
    	  @endphp
    	  <span class="word">{{$word}}</span>
    	  @endwhile
    	  @endif
    	</h1>
		</div>
		<figure class="hero-fp__figure">
			{!! wp_get_attachment_image( $image, 'full', false,  array('class' => 'hero-fp__image' )) !!}
 		</figure>
	</div>
</div>







