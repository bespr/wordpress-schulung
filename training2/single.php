<?php get_header(); ?>



 <div id="main" class="site-main">

     <div id="primary" class="content-area">
	 <div id="content" class="site-content" role="main">

	     <a href="<?php echo get_permalink(get_option('page_for_posts')) ?>" class="back">
		 Zurück zur News-Übersicht
	     </a>
	     
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


     <?php get_sidebar(); ?>

 </div><!-- #main -->


<?php get_footer(); ?>
