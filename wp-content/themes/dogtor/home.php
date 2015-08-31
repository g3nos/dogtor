<?php get_header(); ?>
<section class="portada">
	<div class="slider">
		<ul class="rslides" id="slider1">
		    <li><img src="<?php bloginfo('template_directory'); ?>/images/banner-dogtor-1.png" alt=""></li>
		    <li><img src="<?php bloginfo('template_directory'); ?>/images/banner-dogtor-2.png" alt=""></li>
		    <!--<li><img src="<?php bloginfo('template_directory'); ?>/images/2.png" alt=""></li>
		    <li><img src="<?php bloginfo('template_directory'); ?>/images/3.png" alt=""></li>-->
		</ul>
		<div class="box-sol">
			<h1>Pide un dogtor a domicilio</h1>
			<!--h2>Te facilitamos la atención a tu mascota</h2-->
			<h2>Tú alternativa para una atencion más personalizada</h2>
			<ul class="botones">
				<li class="bot-left"><a href="<?php bloginfo('url') ?>/dogtor-a-domicilio/">Dogtor a domicilio</a></li>
				<!--<li class="bot-right"><a href="#">Iniciar Sesión</a></li>-->
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="box-servicios">
			<ul>
				<li class="box-one">
					<a href="http://dogtor.pe/consultorio-veterinario-a-domicilio/"><img src="<?php bloginfo('template_directory'); ?>/images/consultorio-vet.png" alt=""></a>
					<h1>Consultorio Vet a Domicilio</h1>
					<div class="extracto">
						<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of</p>-->
						<?php
		                    $args=array(
		                       'post_status' => 'publish',
		                       'post_type'=>'page',
		                       'post__in' => array('17')
		                    );
		                    $the_query = new WP_Query($args);
		                
		                while ($the_query->have_posts()) : $the_query->the_post(); ?>
		                
		                    <?php /*the_content();*/ ?>
		                    <?php the_excerpt(); ?>
		                    
		                <?php endwhile; ?>
						<span><a href="http://dogtor.pe/consultorio-veterinario-a-domicilio/">Ver más</a></span>
					</div>
				</li>
				<li class="box-two">
					<a href="http://dogtor.pe/pet-shop/"><img src="<?php bloginfo('template_directory'); ?>/images/pet-shop.png" alt=""></a>
					<h1>Pet Shop</h1>
					<div class="extracto">
						<!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is </p>-->
						<?php
		                    $args=array(
		                       'post_status' => 'publish',
		                       'post_type'=>'page',
		                       'post__in' => array('22')
		                    );
		                    $the_query = new WP_Query($args);
		                
		                while ($the_query->have_posts()) : $the_query->the_post(); ?>
		                
		                    <?php /*the_content();*/ ?>
		                    <?php the_excerpt(); ?>
		                    
		                <?php endwhile; ?>
						<span><a href="http://dogtor.pe/pet-shop/">Ver más</a></span>
					</div>
				</li>
				<li class="box-three">
					<a href="http://dogtor.pe/farmacia-veterinaria/"><img src="<?php bloginfo('template_directory'); ?>/images/farmacia.png" alt=""></a>
					<h1>Farmacia Vet</h1>
					<div class="extracto">
						<?php
		                    $args=array(
		                       'post_status' => 'publish',
		                       'post_type'=>'page',
		                       'post__in' => array('26')
		                    );
		                    $the_query = new WP_Query($args);
		                
		                while ($the_query->have_posts()) : $the_query->the_post(); ?>
		                
		                    <?php /*the_content();*/ ?>
		                    <?php the_excerpt(); ?>
		                    
		                <?php endwhile; ?>
						<span><a href="http://dogtor.pe/farmacia-veterinaria/">Ver más</a></span>
					</div>
				</li>
				<li class="box-four">
					<a href="http://dogtor.pe/laboratorio-veterinario/"><img src="<?php bloginfo('template_directory'); ?>/images/laboratorio.png" alt=""></a>
					<h1>Laboratorio Veterinario</h1>
					<div class="extracto">
						<?php
		                    $args=array(
		                       'post_status' => 'publish',
		                       'post_type'=>'page',
		                       'post__in' => array('24')
		                    );
		                    $the_query = new WP_Query($args);
		                
		                while ($the_query->have_posts()) : $the_query->the_post(); ?>
		                
		                    <?php /*the_content();*/ ?>
		                    <?php the_excerpt(); ?>
		                    
		                <?php endwhile; ?>
						<span><a href="http://dogtor.pe/laboratorio-veterinario/">Ver más</a></span>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="partners">
		<div class="container">
			<ul>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/hills.png" alt=""></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/brit.png" alt=""></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/nutram.png" alt=""></a></li>
				<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/royal-canin.png" alt=""></a></li>
			</ul>
		</div>
	</div>
</section>
<?php get_footer(); ?>