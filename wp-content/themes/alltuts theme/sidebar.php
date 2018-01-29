
<!-- Begin aside -->
		<aside>
		<form id="searchform" action="<?php bloginfo('url'); ?>/" method="get">
			<div class="rightBox rightBoxMidSearch">
					<input type="text" id="s" name="s" value="<?php _e("type your search here", "site5framework"); ?>" onfocus="this.value=''" onblur="this.value='<?php _e("type your search here", "site5framework"); ?>'"/>
					<input type="submit" value="" class="submit" id="searchsubmit"/>	
			</div>
		</form>
		<?php if(of_get_option('alltuts_ads') == 'yes'){?>
		<!-- Begin Ads -->
		<div class="rightBox rightBoxMidAds clearfix">
					 <!-- begin ads -->
						<div id="ads" class="clearfix">
							  <?php wp125_write_ads(); ?>
						</div>
						<!-- end ads -->
				<a href="<?php echo get_page_link(of_get_option('alltuts_advertise'));?>" class="advertise">&raquo; <?php _e("Advertise with us!", "site5framework"); ?></a>	
			</div>
		<!-- End Ads -->
		<?php }?>
		
		<?php if(of_get_option('alltuts_twitter_user')!="" && of_get_option('alltuts_latest_tweet')!="no"){ ?>
		<!-- Begin #twitter -->
				<div id="twitter">					
						<div id="twitter_update_list">
						</div>
					<div id="bottom"><a href="http://twitter.com/<?php echo of_get_option('alltuts_twitter_user'); ?>"><?php _e("Follow Us on Twitter!", "site5framework"); ?></a></div>
				</div>
		<!-- End #twitter -->
		<?php } ?>
		
		<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar' ); ?>
                <?php endif; ?>
		
		</aside>
		<!-- End aside -->
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline.json?screen_name=<?php echo of_get_option('alltuts_twitter_user'); ?>&amp;include_rts=1&amp;callback=twitterCallback2&amp;count=<?php 
		if(of_get_option('alltuts_number_tweets')!=""){
			echo of_get_option('alltuts_number_tweets');
			}else{
				echo "1";
			} ?>"></script>
