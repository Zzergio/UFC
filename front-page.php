<?php get_header(); ?>

<!-- LEFT COL -->

	<div class="col-1">
		<section class="editorial">
			<?php
				$query1 = new WP_Query('cat=9&numberposts=1'); 
				while( $query1->have_posts() ){
					$query1->the_post(); ?>
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
					<div class="editorial-title">
						<h2><?php the_title(); ?></h2>
					<div class="editorial-brief">
						<p><?php the_excerpt(); ?></p>
					</div>	
					</div>
					</a>
			<?php
				}
			wp_reset_postdata();
			?>
			
		</section>
		<section class="articles-box">
			<h1>Свіжачок</h1>
			<?php
				$query2 = new WP_Query('numberposts=10'); 
				while( $query2->have_posts() ){
					$query2->the_post(); ?>
			<article class="article-preview">
				<div class="article-preview-title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> <?php the_time('j F Y'); ?></span> <span class="credits-preview"><i class="far fa-edit"></i> Рубрика: <?php the_category('  |  '); ?></span> <span class="credits-preview"><i class="far fa-user-circle"></i> Автор: <?php the_author_posts_link(); ?></span>
				</div>
				<div class="article-preview-text">
					<div class="article-preview-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>	
				</div>
			</article>
				<?php
				}
			wp_reset_postdata();
			?>	
			
		</section>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>