
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="DESCRIPTION" content="<?php bloginfo('description'); ?>" />
    <meta name="KEYWORDS" content="snow roof rake, avalanche snow rake, snow removal, roof maintenance, avalanche roof rake, roof rake, roof snow removal, ice dam solutions, big rig rake, bigrigrake, bigrigrake.com, buffalo minnesota, wright county," />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />


    <?php wp_head(); ?>

</head>

<body  <?php body_class(); ?>bgcolor="#BCC0C7" background="<?php print IMAGES; ?>/bg.gif">

<div style="text-align: center; border: 1px solid red;">

    <div id="mNavContainer">
        <div><img src="<?php print IMAGES; ?>/nav_top2.gif" width="783" height="12" border="0" alt="" /></div>
        <nav id="main-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => '',
                'menu_class' => 'inline'
            ));
            ?>
        </nav>
        <div class="orgBar"></div>
    </div>
    <div class="frontpage-content">


