<footer>
	<div class="box-footer-top">
		<div class="container">
			<div class="box-footer entradas">
				<h2>Dogtor</h2>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/dogtor.png" alt=""></a>
				<ul>
						<?php 
						wp_nav_menu( array(
							//'theme_location' => 'principal',
							'menu_class' => 'sf-menu',
							'menu_id' => ''
							));
						?>
					</ul>
				<p>
					Teléfono: <br>
					<strong>+511 327-4638 / +511 983717673</strong><br>
					Email: <a href="mailto:info@dogtor.pe">info@dogtor.pe</a><br>
				</p>
			</div>
			<div class="box-footer facebook">
				<h2>Síguenos en facebook</h2>
				<div class="fb-like-box" data-href="https://www.facebook.com/dogtorpe" data-width="328" data-height="350" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
			</div>
			<div class="box-footer boletin">
				<h2>Boletines</h2>
				<!--<form action="boletin.php" method="post">
					<input type="text">
					<input type="submit" value="Suscribirme">
				</form>-->
				<p>Consigue nuestras ofertas y cupones a través de tu e-mail.</p>
				<?php echo do_shortcode( '[contact-form-7 id="77" title="Suscriptores"]' ); ?>
			</div>
		</div>
	</div>
	<div class="box-footer-bottom">
		<div class="container">
			<p><a href="https://www.facebook.com/dogtorpe/" target="_blank">Dogtor Perú</a> © 2015 All Rights Reserved | Privacy Policy</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51227425-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>