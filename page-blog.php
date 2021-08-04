<?php /* Template Name: Blog-Template */
get_header(); ?>

<?php
the_title();
the_content();


$args = array(
    'post_type'         => 'post',
    'posts_per_page'    => -1
);
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<h2>' . get_the_title() . '</h2>';
    }
}
?>

<?php get_footer(); ?>