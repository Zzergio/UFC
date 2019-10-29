</div>
<div class="wrap">
<footer class="footer">
	<div class="slogan"><p>UNDER FOOTBALL COVER</p></div>
		<div class="donate-social">
			<div class="donate">
				<button class="donate">Donate!</button>
			</div>
			<div class="social">
				<a href="https://www.facebook.com/pg/106453067447398"><i class="fab fa-facebook-f"></i></a>
				<a href="https://t.me/ufcppua"><i class="fab fa-telegram-plane"></i></a>
				<a href=""><i class="fab fa-twitter" id="last-icon"></i></a> 
			</div>
		</div>
</footer>
<section class="copy">
	<div><p class="name">
				<?php 
					$start_year = 2019;
					$current_year = date('Y');
						if ($current_year!=$start_year) {
							echo "Under Football Cover © ".$start_year."- ".$current_year;
							}
						else {
							echo "Under Football Cover © ".$start_year; 
							} 
				?>
		 </p></div>
	<div><p><a href="//www.cursor.net.ua/ua">Розробка сайту</a> Cursor <img src="<?php bloginfo('template_url'); ?>/images/cursor.png"></p></div>
</section>
</div>
</body>
<?php wp_footer(); ?>
</html>