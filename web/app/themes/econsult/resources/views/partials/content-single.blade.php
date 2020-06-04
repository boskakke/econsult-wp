@include('partials.hero-illu')

<article @php post_class('section--content article__content') @endphp>

  <div class="single-article">
    <div class="single-article__left article-modules">
      <div class="entry-content">
        <h1 class="page__title">{{ the_title() }}</h1>
        @php the_content() @endphp
    </div>
    @if( have_rows('repeater_images') )
      <div class="cases-gallery">
        <h4 class="cases-gallery__title">
          Galleri
        </h4>
        @while ( have_rows('repeater_images') ) @php the_row(); @endphp
        @php
        $image = get_sub_field( 'image' );
        $large_image = wp_get_attachment_image_src(get_sub_field('image'), 'case-lg');
        $size = 'case';
        @endphp
        <figure class="cases-gallery__item">
          <a href="<?php echo $large_image[0]; ?>" data-fancybox="gallery">
            {!! wp_get_attachment_image( $image, $size, "", array( "class" => "cases-gallery__img" )) !!}
          </a>
        </figure>
        @endwhile
      </div>
    @endif

      <div class="pagination">
        <?php previous_post_link('%link', '<span class="button button--fancy button--primary"><span title="Forrige">Forrige</span></span>'); ?>
        <?php next_post_link('%link', '<span class="button button--fancy button--primary"><span title="Næste">Næste</span></span>'); ?>
      </div>

    </div>

    <div class="single-article__right">
      <?php dynamic_sidebar('sidebar-other'); ?>
    </div>
  </div>
</article>
