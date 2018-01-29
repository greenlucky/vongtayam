<?php /*Template Name: Fullwidth*/

get_header(); ?>

<!-- begin section -->
	<section class="fullwidth">
    <!-- Begin .postBox -->
		<article>
            <header>
				<h1><?php the_title(); ?></h1>	
            </header>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.', "site5framework"); ?></p>
				<?php endif; ?>
		</article>
	 <!-- End .postBox -->
	</section>
	<!-- end section -->
<?php get_footer(); ?>