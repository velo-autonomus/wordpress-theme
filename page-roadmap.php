<?php
get_header();
?>

<main id='roadmap' class='text-padding'>
    <h1><?php the_title()?></h1>
    <br>
    <div id='content'>
        <?php
        $args = array(
            'post_type'      => 'velo_roadmap_item',
            'posts_per_page' => -1,
        );
        $loop = new WP_Query($args);
        $isFirstReached = true;
        while ( $loop->have_posts() ) {
            $loop->the_post();
            ?>
            <div class='goal <?php if(get_post_custom_values('_velo_roadmap_item_reached', get_the_ID())[0]=='checked') {echo 'reached'; if($isFirstReached) {$isFirstReached=false;} else {echo ' upper';}}?>'>
                <div class='progress'>
                    <svg width="30" height="120" viewBox="0 0 30 120">
                        <rect x="7.5" y="0" width="5" height="125" fill="#dadada"/>
                        <rect x="7.5" y="35" width="5" height="90" fill="black" class="reached" />
                        <circle r="10" cx="10" cy="35" fill="#dadada" class='outer' />
                        <circle r="7" cx="10" cy="35" fill="white" />
                    </svg>
                </div>
                <div class='content'>
                    <h2><?php the_title();?></h2>
                    <div class='description'><?php the_content();?></div>
                    <?php
                        $blogId = get_post_custom_values('_velo_roadmap_item_blog', get_the_ID())[0];
                        if(isset($blogId) && $blogId != "") {
                            echo '<a href="../blog/'.$blogId.'">Blog</a>';
                        }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</main>

<?php
get_footer();
?>
