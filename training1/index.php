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

            <header id="masthead" class="site-header" role="banner">

		<h1 class="site-title"><a href="/" rel="home"><?php bloginfo('name'); ?></a></h1>

		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
		    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
		</nav>

            </header><!-- #masthead -->

	    <div id="main" class="site-main">

                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">

			<?php if (have_posts()) { ?>
			    <?php while (have_posts()) { ?>
				<?php the_post(); ?>

				<article>
				    <h2><?php the_title(); ?></h2>
				    <div><?php the_content(); ?></div>
				</article>
			    <?php } ?>
			<?php } else { ?>
                            <h2>Error 404</h2>
                            <p>No posts found</p>
			<?php } ?>

                    </div><!-- #content -->
                </div><!-- #primary -->


                <div id="secondary">
		    <div id="secondary-content">

			<ul>
			    <li>Hier kommt das Zweitmenü hin</li>
			</ul>

			<ul>
			    <li>Hier kommen die Sidebar-Widgets hin</li>
			</ul>
		    </div>
                </div><!-- #secondary -->

            </div><!-- #main -->

            <footer id="colophon" class="site-footer" role="contentinfo">

                <p>Hier kommt die Footer Sidebar hin</p>

                <div class="site-info">
                    &copy; Company
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div><!-- #page -->

	<?php wp_footer(); ?>
    </body>
</html>
