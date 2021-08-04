<?php
    include('customizer.php');

    function velo_theme_setup() {
        register_nav_menus( array(
            'top'   => __( 'Top Menu', 'velo' ),
            'footer-1'   => __( 'Footer Menu 1', 'velo' ),
            'footer-2'   => __( 'Footer Menu 2', 'velo' ),
            'footer-3'   => __( 'Footer Menu 3', 'velo' ),
        ) );
    }
    add_action( 'after_setup_theme', 'velo_theme_setup' );    

    if(!is_admin()) {
        wp_enqueue_style('top-menu', get_template_directory_uri().'/css/top-menu.css');
        wp_enqueue_style('page', get_template_directory_uri().'/css/page.css');
        wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css');
        wp_enqueue_style('velo-components', get_template_directory_uri().'/css/velo-components.css');
        
    } else {
        
    }

?>