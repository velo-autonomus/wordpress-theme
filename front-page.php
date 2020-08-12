<?php
get_header()
?>
<main class='no-padding'>
    <?php
    $args = array(
        'post_type'      => 'velo_home_section',
        'posts_per_page' => -1,
    );
    $loop = new WP_Query($args);
    while ( $loop->have_posts() ) {
        $loop->the_post();

        ?>
        <section id='<?php echo get_post_field( 'post_name' );?>-section' class='<?php echo get_post_custom_values('_velo_home_section_type', get_the_ID())[0];?>'>
            <?php
            if(has_post_thumbnail()) {
            ?>
            <div class='img-wrapper'>
                <?php the_post_thumbnail('original');?>
            </div>
            <?php
            }
            if(!empty(get_the_content())) {
            ?>
            <div class='section-text<?php if((empty(get_the_title())) OR (get_post_custom_values('_velo_home_section_type', get_the_ID())[0]=='center')){ echo ' center'; }?>'>
                <h1><?php the_title();?></h1>
                
                <?php 
                if(get_post_custom_values('_velo_home_section_type', get_the_ID())[0]=='supporters') {
                    echo '<div class="logos">';
                }
                the_content();
                if(get_post_custom_values('_velo_home_section_type', get_the_ID())[0]=='supporters') {
                    echo '</div>';
                }
                ?>
            </div>
            <?php
            }
            ?>
        </section>
        <?php
    }
    ?>

</main>

<?php
get_footer();
?>