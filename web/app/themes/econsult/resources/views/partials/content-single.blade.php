@include('partials.hero-illu')

<article @php post_class('section--content article__content') @endphp>

  <div class="single-article">
    <div class="single-article__left article-modules">
      <div class="entry-content">
        <h1 class="page__title">{{ the_title() }}</h1>
        @php the_content() @endphp
    </div>


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
