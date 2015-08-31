<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
/*register_nav_menu('Principal' , 'Principal');
register_nav_menu('Pie' , 'Pie de página');
register_nav_menu('Mobile' , 'Mobile');

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 ); 
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' ); 
remove_action( 'wp_head', 'index_rel_link' ); 
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'personal_options', '_admin_bar_preferences' ); 

add_filter( 'show_admin_bar', '__return_false' );*/

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function add_stylesheets()
{
       wp_deregister_style('normalize');
       wp_register_style('normalize', get_bloginfo( 'template_url' ). '/css/normalize.css');
       wp_enqueue_style('normalize');

       wp_deregister_style('slider');
       wp_register_style('slider', get_bloginfo( 'template_url' ). '/css/responsiveslides.css');
       wp_enqueue_style( 'slider');

       /*wp_deregister_style('font-pacifico');
       wp_register_style('font-pacifico', 'ttp://fonts.googleapis.com/css?family=Pacifico');
       wp_enqueue_style( 'font-pacifico');*/

       wp_deregister_style('font-open-slab');
       wp_register_style('font-open-slab', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700');
       wp_enqueue_style( 'font-open-slab');

       wp_deregister_style('superfish');
       wp_register_style('superfish', get_bloginfo( 'template_url' ). '/css/superfish.css.css');
       wp_enqueue_style( 'superfish');

       wp_deregister_style('queries');
       wp_register_style('queries', get_bloginfo( 'template_url' ). '/css/queries.css');
       wp_enqueue_style('queries');

       /*wp_deregister_style('estilo-final');
       wp_register_style('estilo-final', get_bloginfo( 'template_url' ). '/style.css');
       wp_enqueue_style('estilo-final');*/

       /*wp_deregister_style('font-qwigley-slab');
       wp_register_style('font-qwigley-slab', 'http://fonts.googleapis.com/css?family=Qwigley');
       wp_enqueue_style( 'font-qwigley-slab');*/
}

add_action('wp_print_styles', 'add_stylesheets');

// Poner scripts en el header
function my_init_method()
{
  //global $post_type;
    
    //ProcessParameters();

    if (!is_admin()) {

      wp_deregister_script( 'jquery' );
      wp_register_script( 'jquery', get_bloginfo('template_directory'). '/js/jquery.min.js');
      wp_enqueue_script( 'jquery' );

      wp_deregister_script( 'slider' );
      wp_register_script( 'slider', get_bloginfo('template_directory'). '/js/responsiveslides.min.js');
      wp_enqueue_script( 'slider' );

      wp_deregister_script( 'scripts' );
      wp_register_script( 'scripts', get_bloginfo('template_directory'). '/js/scripts.js');
      wp_enqueue_script( 'scripts' );

      wp_deregister_script( 'superfish');
      wp_register_script( 'superfish',  get_bloginfo( 'template_url' ). '/js/superfish.js');
      wp_enqueue_script( 'superfish');
    }
    
}
add_action('init', 'my_init_method');

function safe_gobacklink()
{
  $referer = $_SERVER['HTTP_REFERER'];
  // si entra directo que se vaya al home
  if ($referer == NULL)
  {
    echo get_bloginfo('home');
  }
  else
  {
    $parsed_url = parse_url($referer);
    $host = $parsed_url['host'];
    if($host == $_SERVER['SERVER_NAME'])
    {
      echo 'javascript: history.go(-1)';
    }
    else
    {
      echo get_bloginfo('home');
    }
  }
}