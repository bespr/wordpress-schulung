<?php get_header(); ?>



 <div id="main" class="site-main">

     <div id="primary" class="content-area">
	 <div id="content" class="site-content" role="main">

	     <?php if (have_posts()) { ?>
		 <?php while (have_posts()) { ?>
		     <?php the_post(); ?>

		     <article>
			 <p class="date"><?php echo the_date(); ?></p>
			 <h2>
			     <a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			     </a>
			 </h2>
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
