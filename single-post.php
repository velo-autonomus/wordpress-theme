<?php
    get_header(); 
    the_post();
?>
<div class='navbar-spacer'></div>
<h1 class='single-article-title'><?php the_title(); ?></h1>
<div class='single-article-date'><?php the_date(); ?></div>
<?php the_content(); ?>

<?php get_footer(); ?>