@php
	$posts = get_field('other_teasers');
@endphp

@if( $posts )
	<div class="teaser-flow">
	@foreach( $posts as $p )
	
	    	<a href="{{ get_permalink( $p->ID ) }}"></a>
	    	

	    	<div class="grid__item">
	    	<article class="teaser-card fadeUp">
	    	  <a href="{{ get_permalink( $p->ID) }}" class="teaser-card__overlaylink"></a>
	    	  
	    	  @if (get_the_post_thumbnail($p->ID ))
	    	  <figure class="teaser-card__figure">
	    	    {!! get_the_post_thumbnail( $p->ID, 'teaser', array( 'class' => 'teaser-card__image' ) ) !!}
	    	  </figure>
	    	  @endif
	    	  <div class="teaser-card__body">
	    	    <h3 class="teaser-card__header">
	    	      
	    	      {{ get_the_title($p->ID) }}
	    	    </h3>
	    	    {{ the_excerpt($p->ID) }}
	    	    <a href="{{ get_permalink($p->ID) }}" class="teaser-card__readmore">
	    	      Læs mere
	    	    </a>
	    	  </div>
	    	</article>
	    	</div>


	    
	@endforeach
	</div>
@endif