<div class="grid__item">
<article @php post_class('teaser teaser--case fadeUp') @endphp>
  <a href="{{ the_permalink() }}" class="teaser__link"></a>

  @if (has_post_thumbnail())
  <figure class="teaser__figure">
    {{the_post_thumbnail( 'teaser', array( 'class' => 'teaser__image' ) )}}
  </figure>
  @endif
  <div class="teaser__body">
    <h3 class="teaser__title">
      {{ the_title() }}
    </h3>
    {{-- {{ the_excerpt() }} --}}
  <a href="{{ the_permalink() }}" class="teaser__readmore">
    <span>
      Læs case
    </span>
    <svg class="button__arrow"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <use xlink:href="@asset('images/sprite.svg')#arrow-right"></use>
    </svg>
  </a>
  </div>
</article>
</div>
