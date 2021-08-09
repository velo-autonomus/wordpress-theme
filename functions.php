<?php
    include('customizer.php');
    include('lib/donation-shortcode.php');

    function velo_theme_setup() {
        register_nav_menus( array(
            'top'   => __( 'Top Menu', 'velo' ),
            'footer-1'   => __( 'Footer Menu 1', 'velo' ),
            'footer-2'   => __( 'Footer Menu 2', 'velo' ),
            'footer-3'   => __( 'Footer Menu 3', 'velo' ),
        ) );

        add_shortcode( 'velo-donation', 'velo_theme_donation_shortcode' );
    }
    add_action( 'after_setup_theme', 'velo_theme_setup' );    

    if(!is_admin()) {
        wp_enqueue_style('top-menu', get_template_directory_uri().'/css/top-menu.css');
        wp_enqueue_style('page', get_template_directory_uri().'/css/page.css');
        wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
        wp_enqueue_style('velo-components', get_template_directory_uri().'/css/velo-components.css');
        wp_enqueue_style('front-page', get_template_directory_uri().'/css/front-page.css');
        wp_enqueue_style('donation', get_template_directory_uri().'/css/donation.css');
        wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css');

        wp_enqueue_script('donation-script', get_template_directory_uri().'/js/donation.js');
        wp_enqueue_script('top-menu-script', get_template_directory_uri().'/js/top-menu.js');
    } else {
        
    }

    add_theme_support( 'post-thumbnails' );

?>