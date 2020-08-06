<?php
get_header();

if(have_posts()){
    while(have_posts()){
        the_post();
?>
<main class='text-padding'>
    <h1><?php the_title();?></h1><br>
    <?php the_content(); ?>
</main>
<?php
    }
}
get_footer();
// echo wp_get_attachment_image(get_theme_mod('test_setting'), 'original');
// echo wp_get_attachment_image('placeholder', 'original');
// echo attachment_url_to_postid( 'assets/placeholder.jpg' )
?>