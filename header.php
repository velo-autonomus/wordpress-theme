<!DOCTYPE html>
<html lang="de-de">
  <head>
    <title><?php echo bloginfo('name');?></title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='<?php echo bloginfo('description');?>'>
    <?php wp_head();?>
  </head>
  <body>
    <header id='header' <?php if(is_front_page()){echo 'class="dynamicColor"';}?>>
      <a href='<?php echo home_url();?>' id='title'><?php echo bloginfo('name')?></a>
      <?php wp_nav_menu(array('menu' => 'top'));?>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" onclick="openMobileNav()">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" fill="inherit"></path>
      </svg>
    </header>
    <div class='mobileNav' id='mobileNav'>
      <div class='closeWrapper'>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" onclick="closeMobileNav()">
          <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
          <path d="M0 0h24v24H0z" fill="none">
        </svg>
      </div>
      <div class='content'>
        <?php wp_nav_menu(array('menu' => 'top'));?>
      </div>
    </div>
