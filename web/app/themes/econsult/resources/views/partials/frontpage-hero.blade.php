@php
$image = get_field('image');
$title = get_field( 'rotator_title' );

@endphp
<div class="jumbotron">

  <div class="jumbotron__content">
    <div class="jumbotron__title">
      {{$title}}
    </div>
    <h1 class="jumbotron__rotator">

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


  <figure class="jumbotron__figure">
   {!! wp_get_attachment_image( $image, 'full', "") !!}
 </figure>


</div>
