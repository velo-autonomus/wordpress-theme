<!DOCTYPE html>
<html lang='de-DE'>
    <head>
        <title><?php bloginfo('name') ?></title>
        <meta name='description' content='<?php bloginfo('description') ?>'>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width'>
        <?php wp_head() ?>
    </head>
    <body>
        <header>
            <nav>
                <a id='company-name' href='<?php echo get_home_url();?>'><?php bloginfo('name') ?></a>
                <?php wp_nav_menu(array('menu'=>'top')) ?>
                <div id='donate-button'><a class='velo-button' href='donate'>Donate</a></div>
            </nav>
        </header>
        <div id='main-content'>