<?php
get_header();
if(have_posts()) {
    while(have_posts()){
        the_post();
?>
<main class='text-padding' id='single-blog'>
    <h1><?php the_title();?></h1>
    <i>Veröffentlicht am <?php the_date(); ?></i>
    <br>
    <div class='text'>
        <?php the_content(); ?>
    </div>
</main>
<?php
    }
}
get_footer();
?>