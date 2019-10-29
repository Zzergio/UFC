<!-- RIGHT COL -->

	<div class="col-2">
		<section class="posts-list-box">
			<h2>До кави</h2>
			<div class="posts-flex">
			
			<?php
				$query3 = new WP_Query('cat=7&numberposts=3'); 
				while( $query3->have_posts() ){
					$query3->the_post(); ?>
					
				<article class="post-preview">
				<div class="post-preview-title">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<div class="post-preview-text">
					<div class="post-preview-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
						
				</div>
			</article>
			<?php
				}
			wp_reset_postdata();
			?>

			<div class="more-button">
				<button class="more-button">Ще трохи до кави</button>
				</div>
			
			</div>
		</section>
<!-- Fancy Box Popup
		<div style="display:none" class="fancybox-hidden">
    		<div id="contact_form_pop">
    			<h3>Ебані вуха!</h3>
        		<?php echo do_shortcode('[contact-form-7 id="214" title="Контактна форма 1"]'); ?>
    		</div>
		</div>
-->			
		<section class="posts-list-box">
			<h2>Прогнози</h2>
			
			<?php
				$query4 = new WP_Query('cat=2&numberposts=3'); 
				while( $query4->have_posts() ){
					$query4->the_post(); ?>


			<article class="prediction-preview">
				<div class="prediction-preview-title">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				
				<div class="prediction-preview-text">
					<div class="prediction-preview-img">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
						
				</div>
			</article>
			<?php
				}
			wp_reset_postdata();
			?>
				<div class="more-button">
					<button class="more-button">Ще кілька прогнозів</button>
				</div>
			
		</section>
	</div>