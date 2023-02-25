<?php

require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory(). '/inc/dolio-activation.php';
require_once get_template_directory(). '/inc/dolio-demo-import.php';
function dolio_setup(){
       load_theme_textdomain('dolio');
       add_theme_support( 'title-tag' );
       add_theme_support( 'automatic-feed-links' );
       add_theme_support('post-thumbnails',array('post','specializes'));
       load_theme_textdomain('dolio');
       register_nav_menus(array(
              'main-menu'=> __('Main menu', 'dolio')
       ));
       add_theme_support(
              'html5',
              array(
                     'search-form',
                     'comment-form',
                     'comment-list',
                     'gallery',
                     'caption',
                     'script',
                     'style',
                     'navigation-widgets',
              )
       );

       add_theme_support(
              'custom-logo',
              array(
                     'height'      => 190,
                     'width'       => 190,
                     'flex-width'  => false,
                     'flex-height' => false,
              )
       );

}
add_action('after_setup_theme', 'dolio_setup');
function dolio_scripts() {

       wp_enqueue_style( 'main', get_template_directory_uri() . '/stylesheet/style.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/stylesheet/bootstrap.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'fontawsome', get_template_directory_uri() . '/stylesheet/font-awesome.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'theme', get_template_directory_uri() . '/stylesheet/owl.theme.default.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'owl', get_template_directory_uri() . '/stylesheet/owl.carousel.min.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'animate', get_template_directory_uri() . '/stylesheet/animate.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/stylesheet/icomoon.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'pagepiling', get_template_directory_uri() . '/sstylesheet/jquery.pagepiling.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'animation-text', get_template_directory_uri() . '/stylesheet/animation-text.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'shortcode', get_template_directory_uri() . '/stylesheet/shortcodes.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'responsive', get_template_directory_uri() . '/stylesheet/responsive.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'mobile', get_template_directory_uri() . '/stylesheet/mobile-menu.css', array(), '1.0.0', 'all');
       wp_enqueue_style( 'favi', get_template_directory_uri() . '/icon/favicon.ico', array(), '1.0.0', 'all');

       wp_enqueue_script( 'min', get_template_directory_uri() . '/javascript/jquery.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'plugins', get_template_directory_uri() . '/javascript/plugins.js', array(), '1.0.0', true);
       wp_enqueue_script( 'lquery', get_template_directory_uri() . '/javascript/jquery-ui.js', array(), '1.0.0', true);
       wp_enqueue_script( 'owl', get_template_directory_uri() . '/javascript/owl.carousel.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'java', get_template_directory_uri() . '/javascript/jquery.pagepiling.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'easy-pie', get_template_directory_uri() . '/javascript/jquery.easy-pie-chart.js', array(), '1.0.0', true);
       wp_enqueue_script( 'wow', get_template_directory_uri() . '/javascript/wow.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'counto', get_template_directory_uri() . '/javascript/jquery-countTo.js', array(), '1.0.0', true);
       wp_enqueue_script( 'anmate', get_template_directory_uri() . '/javascript/animatedModal.min.js', array(), '1.0.0', true);
       wp_enqueue_script( 'animation', get_template_directory_uri() . '/javascript/animation-text.js', array(), '1.0.0', true);
       wp_enqueue_script( 'main', get_template_directory_uri() . '/javascript/main.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'dolio_scripts' );



if( function_exists('acf_add_options_page')) {
acf_add_options_page(array(
       'page_title' 	=> 'Dolio Options','dolio',
       'menu_title'	=> 'Dolio Options','dolio',
       'menu_slug' 	=> 'dolio-options',
       'capability'	=> 'edit_posts',
       'redirect'	=> false,
));

acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Header Settings','dolio',
       'menu_title'	=> 'Header','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Banner Settings','dolio',
       'menu_title'	=> 'Banner','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio About Settings','dolio',
       'menu_title'	=> 'About','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Special Settings','dolio',
       'menu_title'	=> 'Specialize','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Hello Settings','dolio',
       'menu_title'	=> 'Hello','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Testimonial Settings','dolio',
       'menu_title'	=> 'Testimonial','dolio',
       'parent_slug'	=> 'dolio-options',
));

acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio TryMe Settings','dolio',
       'menu_title'	=> 'Try-Me','dolio',
       'parent_slug'	=> 'dolio-options',
));

acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Portfolio Settings','dolio',
       'menu_title'	=> 'Portfolio','dolio',
       'parent_slug'	=> 'dolio-options',
));
acf_add_options_sub_page(array(
       'page_title' 	=> 'Dolio Footer Settings','dolio',
       'menu_title'	=> 'Footer','dolio',
       'parent_slug'	=> 'dolio-options',
));

}

function dolio_widgets_init() {
       register_sidebar( array(
           'name'          => __( 'Main Sidebar', 'dolio' ),
           'id'            => 'sidebar-1',
           'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'dolio' ),
           'before_widget' => '<ul class="widget-nav-menu color-s2">',
           'after_widget'  => ' </ul>',
           'before_title'  => '',
           'after_title'   => '',
       ) );
   }
   add_action( 'widgets_init', 'dolio_widgets_init' );