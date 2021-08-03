<?php
    include('customizer.php');

    function velo_theme_setup() {
        register_nav_menus( array(
            'top'   => __( 'Top Menu', 'velo' ),
            'footer'   => __( 'Footer Menu', 'velo' ),
        ) );
    }
    add_action( 'after_setup_theme', 'velo_theme_setup' );    

    if(!is_admin()) {
        // wp_enqueue_style('theme', get_template_directory_uri().'/css/theme.css');
        
    } else {
        
    }

?>