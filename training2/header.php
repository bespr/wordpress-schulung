<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
    </head>

    <body>
        <div id="page" class="hfeed site">

	    
	    <header id="masthead" class="site-header cf" role="banner">

		 <h1 class="site-title"><a href="/" rel="home"><?php bloginfo('name'); ?></a></h1>

		 <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
		     <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		 </nav>

	     </header><!-- #masthead -->	    