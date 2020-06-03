@php
$image = get_field('image');
$title = get_field( 'rotator_title' );

@endphp


<div class="hero-fp">
	@include('partials.header')
	<div class="hero-fp__curtain"></div>
	<div class="hero-fp__inner">
		<div class="hero-fp__illu">
			<figure class="hero-fp__figure">
				{!! wp_get_attachment_image( $image, 'hero', false,  array('class' => 'hero-fp__image' )) !!}
	 		</figure>
	 		<svg class="hero-fp__logo"
				viewBox="0 0 103 103"
				xmlns="http://www.w3.org/2000/svg">
				<use xlink:href="@asset('images/sprite.svg')#logo_house"></use>
			</svg>
		</div>

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

	</div>
</div>







