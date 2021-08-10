        <?php /* Template Name: Blog-Template */
        get_header(); ?>
        <div class='navbar-spacer'></div>
        <?php


        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => -1
        );
        $the_query = new WP_Query( $args );

        ?>
        <div id='blog-spotlight-wrapper'>
            <div class='thumbnail-wrapper'>
                <?php echo get_the_post_thumbnail( $the_query->posts[0] );?>
            </div>
            <h1><?php echo $the_query->posts[0]->post_title;?></h1>
            <div><?php echo (new DateTime($the_query->posts[0]->post_date))->format('d.m.yy');?></div>
            <p><?php echo get_the_excerpt($the_query->posts[0]);?></p>
            <div class='article-read-more'><a href='<?php echo get_permalink($the_query->posts[0]); ?>'> Read more ></a></div>
        </div>
    </div>
</div>
<div id='blog-articles-wrapper'>
    <div id='main-content'>
        <h1><?php the_title(); ?></h1>
        <div class='blog-articles'>
        <?php

            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>
                    <div class='blog-article'>
                        <div class='article-thumbnail'><?php the_post_thumbnail(); ?></div>
                        <div class='article-title'><?php the_title(); ?></div>
                        <div class='article-date'><?php the_date(); ?></div>
                        <div class='article-teaser'><?php the_excerpt(); ?></div>
                        <div class='article-read-more'><a href='<?php the_permalink(); ?>'> Read more ></a></div>
                    </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
</div>
<div id='contact-us-now-wrapper'>
    <div id='main-content'>
        <?php 
        the_post();
        the_content();
        get_footer(); ?>