<div class="grid__item">
<article @php post_class('teaser-card fadeUp') @endphp>
  <a href="{{ the_permalink() }}" class="teaser-card__overlaylink"></a>

  @if (has_post_thumbnail())
  <figure class="teaser-card__figure">
    {{the_post_thumbnail( 'teaser', array( 'class' => 'teaser-card__image' ) )}}
  </figure>
  @endif
  <div class="teaser-card__body">
    <h3 class="teaser-card__header">
      {{ the_title() }}
    </h3>
    {{ the_excerpt() }}
    <a href="{{ the_permalink() }}" class="teaser-card__readmore">
      Læs mere
    </a>
  </div>
</article>
</div>
