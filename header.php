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
                <div id='mobile-menu-button' onclick='toggleMobileMenu()'>
                    <img class='open-menu-icon' src='<?php echo get_template_directory_uri()?>/assets/icons/baseline-menu-24px.svg'>
                    <img class='close-menu-icon' src='<?php echo get_template_directory_uri()?>/assets/icons/close-24px.svg'>
                </div>
            </nav>
            <div id='mobile-menu'>
                <?php wp_nav_menu(array('menu'=>'top')) ?>
                <div id='donate-button'><a class='velo-button' href='donate'>Donate</a></div>
            </div>
        </header>
        <div id='main-content'>