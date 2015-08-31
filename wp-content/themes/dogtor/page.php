<?php get_header(); ?>
	<section class="paginas">
		<div class="container">
			<div class="dogtor-domicilio interiores">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="contenido">
					<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div class="bot_back">
				<a href="<?php safe_gobacklink();?>">Volver</a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>