<?php
    include('customizer.php');

    if(!function_exists('veloautonomus_setup')) :

        function veloautonomus_setup() {
            add_theme_support( 'post-thumbnails' );

            register_nav_menus( array(
                'top'   => __( 'Top Menu', 'veloautonomus' ),
                'footer'   => __( 'Footer Menu', 'veloautonomus' ),
            ) );

            $startercontent = array();
            add_action('starter-content', $startercontent);

        }

    endif; 
    add_action( 'after_setup_theme', 'veloautonomus_setup' );    

    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css');
    wp_enqueue_style('header', get_template_directory_uri().'/css/header.css');
    wp_enqueue_style('homepage-sections', get_template_directory_uri().'/css/homepage-sections.css');
    wp_enqueue_style('form', get_template_directory_uri().'/css/form.css');
    wp_enqueue_style('roadmap', get_template_directory_uri().'/css/roadmap.css');
    wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css');
    wp_enqueue_style('single-blog', get_template_directory_uri().'/css/single-blog.css');
    wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');

    wp_enqueue_script('mobileMenu', get_template_directory_uri().'/js/topmenu.js');

    //Remove html-tag margin-top: 32px !important
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');
?>