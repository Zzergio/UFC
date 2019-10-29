<?php get_header(); ?>

<!-- LEFT COL -->

	<div class="col-1">
		
		<section class="single-article-box">
			<h1><?php $category = get_the_category(); 
				echo $category[0]->cat_name; ?></h1>
			<?php  while ( have_posts() ) :
			the_post(); ?>
			<article class="single-article">
				<div class="single-article-title">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> <?php the_time('j F Y'); ?></span> <span class="credits-preview"><i class="far fa-edit"></i> Рубрика: <?php the_category('  |  '); ?></span> <span class="credits-preview"><i class="far fa-user-circle"></i> Автор: <?php the_author_posts_link(); ?></span>
				</div>
				<div class="single-article-content">
					<div class="title-img">
					<?php the_post_thumbnail(); ?>
					</div>
				<!--	<div class="credits-box"> -->
					
				<!-- </div> -->
					<?php the_content(); ?>
					<div class="credits">
						<div>
						<p><?php the_field('source_text'); ?>
							<?php 
$link = get_field('source');

if( $link ): 
	$link_url = $link['url'];
	$link_title = $link['title'];
	$link_target = $link['target'] ? $link['target'] : '_self';
	?>
	<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
<?php endif; ?>
					</p>
					<div class="tags"><p>
	<?php the_tags( 'Теги: ', ', ', '' ); ?> </p>

					</div>						
				</div>
					</div>
				</div>
				
			</article>
			<?php  if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif;
			 ?>
			<?php endwhile;
		 ?>


					</section>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>