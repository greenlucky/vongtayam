<?php get_header(); ?>
	
		<!-- Begin section -->
		<section>

		<div id="archive-title">
		Search results for "<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<strong>'); echo $key; _e('</strong>'); wp_reset_query(); ?>"
		</div>
						
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<!-- Begin article -->
		<article>
            <header>
				<div class="date"><?php the_time('M') ?><br /><span class="day"><?php the_time('j') ?></span><br /><?php the_time('Y') ?></div>
				<div class="category"><?php the_category(' // ') ?></div>
				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1> 
            </header>
				<!--<div class="textPreview">-->
					<?php the_excerpt(); ?>
				<!--</div>-->
			<footer>
					<a href="<?php the_permalink() ?>" class="more-link"><?php _e('Continue Reading ', 'site5framework'); ?>&raquo;</a>
					<div class="metaRight">
						<img src="<?php bloginfo('template_directory'); ?>/images/ico_author.png" alt="<?php _e('Author', 'site5framework'); ?>"/><?php _e('An article by ', 'site5framework'); ?> <?php the_author_link(); ?>
						<img src="<?php bloginfo('template_directory'); ?>/images/ico_comments.png" alt="<?php _e('Comments', 'site5framework'); ?>"/> <?php comments_popup_link(__("No Comments", "site5framework"),__("1 Comment", "site5framework"),__("% Comments", "site5framework") );?>
					</div>
			</footer>
		</article>
		
		<!-- End article -->
		
		<?php endwhile; ?>

	<?php else : ?>
		<p><?php _e('Sorry, but you are looking for something that isn\'t here.', 'site5framework'); ?></p>
	<?php endif; ?>
            <!--<div class="navigation">
						<div class="alignleft"><?php next_posts_link() ?></div>
						<div class="alignright"><?php previous_posts_link() ?></div>
			</div>-->
			<?php if (function_exists("wpthemess_paginate")) {
				wpthemess_paginate();
			} ?>
		</section>
		<!-- End section -->

<?php get_sidebar(); ?>	

<?php get_footer(); ?>
