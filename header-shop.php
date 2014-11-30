
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
<div align="center">
    <table cellspacing="0" cellpadding="0" border="0" width="783" valign="top">
        <tr>
            <td valign="top"><img src="<?php print IMAGES; ?>/head01.jpg" width="783" height="46" border="0" alt="" /><br /></td>
        </tr>
        <tr>
            <td valign="top" bgcolor="#F8F9FD"><div style="float:left"><img src="<?php print IMAGES; ?>/head02.jpg" width="56" height="76" border="0" alt="" /></div>
                <div style="float:left"><a href="<?php echo home_url(); ?>"><img src="<?php print IMAGES; ?>/head03_logo.gif" width="285" height="76" border="0" alt="<?php bloginfo('name'); ?>" /></a></div>
                <div style="float:left; width:373px; height:76px;background-image:url(<?php print IMAGES; ?>/head04_Homeback.jpg);">
                    <div style="margin:0px 0px 0px 30px">
                        <div class="homehead">
                            <table width="330" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td valign="top"><div style="font-size:12px;">Sales &amp; Customer Service:</div>
                                        <div class="homephone" style="margin-top:0px;font-size:24px;">800-378-3088</div></td>
                                    <td><div style="width:10px; height:40px; border-left:solid #999 1px;"></div></td>
                                    <td valign="bottom"><div class="cartlink"><a href="<?php echo home_url(); ?>/cart/"><img src="<?php print IMAGES; ?>/shoppingCart_icon.gif" alt="" width="24" height="17" border="0"><br>View Your Shopping Cart</a></div></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div style="float:left"><img src="<?php print IMAGES; ?>/head05.jpg" width="69" height="76" border="0" alt="" /><br />
                </div></td>
        </tr>
    </table>
    <!--<table cellspacing="0" cellpadding="0" border="0" width="783" valign="top">
      <tr>
        <td valign="top"><img src="/<?php print IMAGES; ?>/nav_top.gif" width="783" height="12" border="0" alt="" /><br /></td>
      </tr>
      <tr>
        <td valign="top" align="center" style="background:#bcc0c7;"><div class="topnav"><img src="/<?php print IMAGES; ?>/nav_light_on.gif" width="28" height="28" border="0" alt="Home" /><a href="/index.asp">HOME</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/eshop/10browse.asp">PRODUCTS</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/gallery.asp">GALLERY</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/dams.asp">ICE DAMS</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/testimonials.asp">TESTIMONIALS</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/contact.asp">CONTACT US</a><img src="/<?php print IMAGES; ?>/nav_light_off.gif" width="28" height="28" border="0" alt="" /><a href="/dealer.asp">DEALERS</a></div></td>
      </tr>
      <tr>
        <td valign="top"><img src="/<?php print IMAGES; ?>/nav_bottom.gif" width="783" height="14" border="0" alt="" /><br /></td>
      </tr>
    </table>-->
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
    <table cellspacing="0" cellpadding="0" border="0" width="740" bgcolor="#ffffff" valign="top">
        <tr>
            <td valign="top"><br style="clear: both;" />
