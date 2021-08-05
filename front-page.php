<?php get_header(); ?>

<div id='landing-hero'>
    <img id='front-page-hero' src='<?php echo esc_url(get_theme_mod('homepage-hero')); ?>' alt='<?php echo get_the_title(attachment_url_to_postid(get_theme_mod('homepage-hero')));?>'>
    <h1><?php echo get_theme_mod('homepage-slogan');?></h1>
</div>

<div id='front-page-content-wrapper'>
    <div id='front-page-content'>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>