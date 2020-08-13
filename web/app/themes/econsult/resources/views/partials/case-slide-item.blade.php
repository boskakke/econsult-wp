<div class="swiper-slide case-slider__item ">
<article @php post_class('case-slider__article') @endphp>
  <a href="{{ the_permalink() }}" class="teaser-card__overlaylink"></a>

  @if (has_post_thumbnail())
  <figure class="case-slider__figure">
    {{the_post_thumbnail( 'teaser', array( 'class' => 'teaser-card__image' ) )}}
  </figure>
  @endif
  <div class="case-slider__body">
    <h3 class="case-slider__header">
      {{ the_title() }}
    </h3>
    {{ the_excerpt() }}
    <a href="{{ the_permalink() }}" class="teaser-card__readmore">
      Læs mere
    </a>
  </div>
</article>
</div>
