<?php 
get_header();
?>
<main class='text-padding' id='blog'>
    <h1><?php the_title();?></h1>
    <br>
    <div id='content'>
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
        );
        $loop = new WP_Query($args);
        if ( $loop->have_posts() ) : 
            while ( $loop->have_posts() ) : $loop->the_post(); 
            ?>
            <div class='article'>
                <h2><?php the_title();?></h2>
                <div class='teaser'><?php the_excerpt();?></div>
                <a href='<?php echo get_permalink()?>'>Weiterlesen</a>
            </div>
            <?php
            endwhile; 
        endif; 
        ?>
    </div>
</main>
<?php get_footer(); ?>