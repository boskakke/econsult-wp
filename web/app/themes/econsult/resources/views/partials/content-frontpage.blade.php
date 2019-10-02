
<?php 
$image = get_field('img_hero');
?>


<?php if($image): ?>
<div class="section section__hero">
	<figure class="hero__figure hero__figure--gradient">
		{{ the_post_thumbnail( 'hero_lg', array( 'class' => ' hero__image ', 'alt' => get_the_title() ) ) }}
	</figure>
</div>
<?php endif; ?>

<?php 
$template = get_field('radio_page_category');
?>



<?php if($template): ?>


<div class="products">
	<div class="products__row products__row--top">
		<div class="products__col flex-1 <?php echo $classHeader; ?>">
			<ul class="main-tabs">
				<li class="main-tabs__item <?php if($template == 'private'): ?> active <?php endif; ?>" data-tab="privat">
					<a href="#" class="main-tabs__link">
						Privat 
					</a>
				</li>
				<li class="main-tabs__item <?php if($template == 'business'): ?> active <?php endif; ?>" data-tab="erhverv">
					<a href="#" class="main-tabs__link ">
						Erhverv
					</a>
				</li>
			</ul>

			<?php if(get_field('txt_phone','options')): ?>
			<div class="contact__desktop ">
				<div class="p-2">
					Kontakt os for et uforpligtende tilbud
				</div>
				<div class="p-2 font-30 ml-1">
					<i class="icon-phone green mr-1"></i> <?php the_field('txt_phone','options'); ?>
				</div>  
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="products__row products__row--bottom">
		<?php 
			$menu_private_class =     'products-menu';
			$menu_business_class =    'products-menu';
			if ($template ==  'private') {
				$menu_private_class .= ' active';
			} else {
				$menu_business_class .= ' active';
			}
		?>
		
		{!! 
				wp_nav_menu(['menu' => 'private_navigation', 'menu_class' => $menu_private_class , 'menu_id' => 'privat', 'container' => false, 'container_id' => 'privat']) !!}	
			
		
			{!! 
				wp_nav_menu(['menu' => 'business_navigation', 'menu_class' => $menu_business_class, 'menu_id' => 'erhverv', 'container' => false, 'container_id' => 'busines']) !!}	
	</div>
</div>

<?php endif; ?>



<div class="section--content ">
	
				

					<?php if( have_rows('repeater_news_left') ): ?>
					<div class="teaser-main">

					<?php while ( have_rows('repeater_news_left') ) : the_row(); ?>

					<article class="teaser mb-5">
						<a href="<?php the_sub_field('link'); ?>" class="teaser__link">
							<h1 class="teaser__header teaser__header--h1">
								<?php the_sub_field('txt_header'); ?>
							</h1>

							<div><?php the_sub_field('txt_summary'); ?></div>

							<div class="button button--primary button--fancy button--md">
								<span title="Læs mere">Læs mere</span>
							</div>
						</a>
					</article>

					<?php endwhile; ?>
	</div>
					<?php endif; ?>

			
				

					<?php if( have_rows('repeater_news_right') ): ?>

					<div class="teasers-small">

					<?php while ( have_rows('repeater_news_right') ) : the_row(); ?>

					<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'hero_sm'); ?>

					<article class="teaser teaser-overlay">
						<a href="<?php the_sub_field('link'); ?>" class="teaser__link">
							<figure class="teaser__figure">
								<img src="<?php echo $image[0]; ?>" width="" height="" alt="<?php echo get_the_title(get_field('img_picture')) ?>" />
							</figure>
							<div class="teaser__body">
								<h3 class="teaser__header">
									<?php the_sub_field('txt_header'); ?>
								</h3>
								<p><?php the_sub_field('txt_summary'); ?></p>
								<div class="button button--primary button--fancy button--md">
									<span title="Læs mere">Læs mere</span>
								</div>
							</div>
						</a>
					</article>
					
					<?php endwhile; ?>
						</div>
					<?php endif; ?>
				
</div>



<?php


if( have_rows('flex_elements') ):


	while ( have_rows('flex_elements') ) : the_row();


		if( get_row_layout() == 'section_bullets' ): ?>

		<div class="section-bullits">

				<div class="section-bullits__col section-bullits__col--left">

					<?php if( have_rows('repeater_bullets_left') ): ?>

					<ul class="list list-bullits list-bullits--right">

						<?php while ( have_rows('repeater_bullets_left') ) : the_row(); ?>

						<li class="list-bullits__item">
							<h3 class="list-bullits__header">
								<?php the_sub_field('txt_header'); ?>
							</h3>
							<p><?php the_sub_field('txt_summary'); ?></p>
						</li>
						
						<?php endwhile; ?>

					</ul>

					<?php endif; ?>

				</div>


				<?php $image = wp_get_attachment_image_src(get_sub_field('img_picture'), 'full'); ?>

				<div class="section-bullits__illu">
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_picture')) ?>" />
				</div>


				<div class="section-bullits__col">

					<?php if( have_rows('repeater_bullets_right') ): ?>

					<ul class="list list-bullits list-bullits--left">

						<?php while ( have_rows('repeater_bullets_right') ) : the_row(); ?>

						<li class="list-bullits__item">
							<h3 class="list-bullits__header">
								<?php the_sub_field('txt_header'); ?>
							</h3>
							<p><?php the_sub_field('txt_summary'); ?></p>
						</li>

						<?php endwhile;	?>

					</ul>

					<?php endif; ?>



				</div>
		</div>

		<?php 

		
		elseif( get_row_layout() == 'section_quote' ): ?>
		
		<?php 
		$image = wp_get_attachment_image_src(get_sub_field('img_quote'), 'full'); ?>
		

		<div class="section-illu mb-10 ">
			<div class="container flex">
				<div class="section-illu__col section-illu__col--left">
					<h3 class="section-illu__header"><?php the_sub_field('txt_quote'); ?></h3>
				</div>
				<div class="section-illu__col section-illu__col--right">
					<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('img_quote')) ?>" />
				</div>
			</div>
		</div>
		

		<?php 	


	endif;

endwhile;

else :

		// no layouts found

endif;

?>





<?php  get_template_part('templates/cases'); ?>


<?php  get_template_part('templates/contact'); ?>

@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
