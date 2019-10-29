<?php get_header(); ?>

<!-- LEFT COL -->

	<div class="col-1">
		<section class="single-article-box">
			<?php  while ( have_posts() ) :
			the_post(); ?>
			<article class="single-article">
				<div class="single-article-title">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="single-article-content">
					<div class="title-img">
					<?php the_post_thumbnail(); ?>
					</div>
					<?php the_content(); ?>
				</div>
			</article>
			
			<?php  if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
			
			<?php endwhile; ?>

		</section>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>