<?php get_header(); ?>

<!-- LEFT COL -->

	<div class="col-1">
		<section class="editorial">
			<?php $posts = get_posts ('category=9&numberposts=1'); ?> 
			<?php if ($posts) : ?>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
				<div class="editorial-title">
					<h2><?php the_title(); ?></h2>
					
				</div>
			</a>
			<?php endforeach; ?>
			<?php endif; ?>
		</section>
		<section class="articles-box">
			<h1>Дизайн</h1>
			<?php if ( have_posts() ) : ?> 
				<?php while ( have_posts() ) : the_post(); ?>
			<article class="article-preview">
				<div class="article-preview-title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> <?php the_time('j F Y'); ?></span> <span class="credits-preview">Рубрика: <?php the_category('  |  '); ?></span> <span class="credits-preview">Автор: <?php the_author_posts_link(); ?></span>
				</div>
				<div class="article-preview-text">
					<div class="article-preview-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>	
				</div>
			</article>
				<?php endwhile; ?>
			<?php endif; ?>		
			
		</section>

		<section class="articles-box">
			<h1>Український футбол</h1>
			<article class="article-preview">
				<div class="article-preview-title">
					<h2><a href="">Куда прешь, скотина?</a></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> 14 жовтня 2019</span>
				</div>
				<div class="article-preview-text">
					<div class="article-preview-img">
						<a href=""><img src="img/yarmola.jpg"></a>
					</div>
					<p><a href="">Ніяких серьозних підписань, обмежений трансферний бюджет та капітан клубу, який так відчайдушно хоче піти, що відмовляється від туру по США. Арсенал показує, що веселі часи продовжуються. Але вони спромоглися зробити чудовий домашній комплект форми.</a></p>	
				</div>
			</article>
			<article class="article-preview">
				<div class="article-preview-title">
					<h2><a href="">Ніяких серьозних підписань</a></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> 14 жовтня 2019</span>
				</div>	
				<div class="article-preview-text">
					<div class="article-preview-img">
						<a href=""><img src="img/gazza.jpg"></a>
					</div>
					<p><a href="">Ніяких серьозних підписань, обмежений трансферний бюджет та капітан клубу, який так відчайдушно хоче піти, що відмовляється від туру по США. Арсенал показує, що веселі часи продовжуються. Але вони спромоглися зробити чудовий домашній комплект форми.</a></p>	
				</div>
			</article>
			<article class="article-preview">
				<div class="article-preview-title">
					<h2><a href="">Куда прешь, скотина?</a></h2>
				</div>
				<div class="article-preview-date">	
					<span class="date"><i class="far fa-clock"></i> 14 жовтня 2019</span>
				</div>
				<div class="article-preview-text">
					<p><a href="">Ніяких серьозних підписань, обмежений трансферний бюджет та капітан клубу, який так відчайдушно хоче піти, що відмовляється від туру по США. Арсенал показує, що веселі часи продовжуються. Але вони спромоглися зробити чудовий домашній комплект форми.</a></p>	
				</div>
			</article>
		</section>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>