<?php
add_action( 'customize_register', 'velo_theme_customizer_settings' );

function velo_theme_customizer_settings( $wp_customize ) {

    $wp_customize->add_section('homepage', array(
        'title' => 'Homepage',
        'priority'=>30
    ));

    $wp_customize->add_setting('homepage-slogan', array(
        'default' => 'THE SELF DRIVING BIKE',
        'transport' => 'refresh'
    ));
    $wp_customize->add_control( 'homepage-slogan', array(
        'label' => __( 'Slogan', 'velo_theme' ),
        'description' => 'Der Slogan, der groß auf der Homepage zu sehen ist',
        'section' => 'homepage',
        'type' => 'text',
    ) );
}
?>
