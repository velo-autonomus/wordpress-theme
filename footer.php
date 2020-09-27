        <footer>
            <span><?php echo get_theme_mod('copyright_owner');?> © <?php echo get_theme_mod('copyright_year');?></span>
            <?php
            wp_nav_menu(array('menu' => 'footer'));
            ?>
        </footer>
        <?php wp_footer(); ?>
    </body>
<html>