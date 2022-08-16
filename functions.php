<?php

function istrategic_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri() );

wp_enqueue_style('nav', get_theme_file_uri('/css/sections/nav.css'));
wp_enqueue_style('hero', get_theme_file_uri('/css/sections/hero.css'));
wp_enqueue_style('contact', get_theme_file_uri('/css/sections/contact.css'));
wp_enqueue_style('img', get_theme_file_uri('/css/elements/img.css'));
wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));

if( is_page_template('templates/careers.php' )){
	wp_enqueue_style('careers', get_theme_file_uri('/css/sections/careers.css'));
}

if(is_front_page() || is_page_template('templates/mena.php')){
	wp_enqueue_style('home', get_theme_file_uri('/css/sections/home.css'));
	wp_enqueue_style('mena', get_theme_file_uri('/css/sections/mena.css'));
}

if(is_page_template('templates/about.php')){
	wp_enqueue_style('about-custom', get_theme_file_uri('/css/sections/about.css'));
	wp_enqueue_style('intro', get_theme_file_uri('/css/sections/intro.css'));
}
if( is_page_template('templates/content-page.php' ) ){
	wp_enqueue_style('content-page', get_theme_file_uri('/css/sections/content-page.css'));
}
if(is_page_template('templates/services-individual.php')){
	wp_enqueue_style('services', get_theme_file_uri('/css/sections/services.css'));
}
if(is_page_template('templates/services.php')){
	wp_enqueue_style('services-index', get_theme_file_uri('/css/sections/services-index.css'));
}
if(is_single() || is_page_template('templates/blog.php') || is_archive() || is_category() || is_tag() || is_404() ) {
wp_enqueue_style('blog', get_theme_file_uri('/css/sections/blog.css'));
}

wp_enqueue_style('photo-gallery', get_theme_file_uri('/css/sections/photo-gallery.css'));
wp_enqueue_style('body', get_theme_file_uri('/css/sections/body.css'));
wp_enqueue_style('footer', get_theme_file_uri('/css/sections/footer.css'));
wp_enqueue_style('sidebar', get_theme_file_uri('/css/sections/sidebar.css'));
wp_enqueue_style('social-icons', get_theme_file_uri('/css/sections/social-icons.css'));
wp_enqueue_style('btn', get_theme_file_uri('/css/elements/btn.css'));
wp_enqueue_style('popup', get_theme_file_uri('/css/sections/popup.css'));
// fonts
wp_enqueue_style('fonts', get_theme_file_uri('/css/elements/fonts.css'));
wp_enqueue_style('proxima-nova', get_theme_file_uri('/proxima-nova/proxima-nova.css'));
// wp_enqueue_style('blair-itc', get_theme_file_uri('/blair-itc/blair-itc.css'));
// wp_enqueue_style('aspira', get_theme_file_uri('/aspira-font/aspira-font.css'));
wp_enqueue_style('quattro', '//use.typekit.net/awo8oyk.css');


}
add_action('wp_enqueue_scripts', 'istrategic_stylesheets');
// for footer
function istrategic_stylesheets_footer() {
	// wp_enqueue_style('style-footer', get_theme_file_uri('/css/style-footer.css'));
	// owl carousel
	wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
	wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
	wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));
	// wp_enqueue_script('font-awesome', '//use.fontawesome.com/fff80caa08.js');

	// owl carousel
	wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
	wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
	wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
	// wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
	// wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));
    // aos
    // wp_enqueue_script('aos-js', get_theme_file_uri('/aos/aos.js'));
    // wp_enqueue_script('aos-custom-js', get_theme_file_uri('/aos/aos-custom.js'));
    // wp_enqueue_style('aos-css', get_theme_file_uri('/aos/aos.css'));

	// jquery fittext
	// wp_enqueue_script('jquery-min-js', get_theme_file_uri('/jquery-fittext/jquery.min.js'));
    wp_enqueue_script('jquery-fittext', get_theme_file_uri('/jquery-fittext/jquery.fittext.js'));
    wp_enqueue_script('jquery-fittext-custom', get_theme_file_uri('/jquery-fittext/fittext.js'));
	// jquery modal
	// wp_enqueue_script('jquery-modal-js', get_theme_file_uri('/jquery-modal/jquery.modal.min.js'));
	// wp_enqueue_style('jquery-modal-css', get_theme_file_uri('/jquery-modal/jquery.modal.min.css'));
	// wp_enqueue_style('custom-modal', get_theme_file_uri('/jquery-modal/modal-custom.css'));
    // general
	wp_enqueue_script('nav-js', get_theme_file_uri('/js/nav.js'));
	wp_enqueue_script('popup-js', get_theme_file_uri('/js/popup.js'));
	
	if(is_single()){
		wp_enqueue_script('blog-js', get_theme_file_uri('/js/blog.js'));
		}
	if(is_front_page() || is_page_template('templates/mena.php') ) {
		wp_enqueue_script('home-js', get_theme_file_uri('/js/home.js'));
		}
		if(is_page_template('templates/services-individual.php')){
			wp_enqueue_script('services-js', get_theme_file_uri('/js/services.js'));
		}
		if(is_page_template('templates/careers.php')){
			wp_enqueue_script('careers-js', get_theme_file_uri('/js/careers.js'));
		}
	}
	
add_action('get_footer', 'istrategic_stylesheets_footer');

// loads enqueued javascript files deferred
function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'jquery-min',
	  'owl-carousel',
	  'owl-carousel-custom',
	  'lightbox-min-js',
	  'lightbox-js',
	  'aos-js',
	  'aos-custom-js',
	  'nav-js',
	  'blog-js',
	  'contact-js'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	  
	  return $tag;
  } 
  add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );

function istrategic_menus() {
 register_nav_menus( array(
   'primary' => __( 'Primary' )));
register_nav_menus( array(
'secondary' => __( 'Secondary' )));
 register_nav_menu('footer',__( 'Footer' ));
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'istrategic_menus');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
}

// removes gutenberg styles from all pages but the blog posts
function smartwp_remove_wp_block_library_css(){

	if(!is_single()) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
	}
} 
// add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

// add_filter('show_admin_bar', '__return_false');

// add_filter('comment_form_default_fields', 'remove_website_field_from_comment_form');
function remove_website_field_from_comment_form($fields)
{
    if (isset($fields['url'])) {
        unset($fields['url']);
    }
    return $fields;
}

/*Base URL shorcode*/
add_shortcode( 'base_url', 'baseurl_shortcode' );
function baseurl_shortcode( $atts ) {

    return site_url();
	// [base_url]

}

function truncate($text, $chars = 25) {
    if (strlen($text) <= $chars) {
        return $text;
    }
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}