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