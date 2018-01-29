<?php
/**
 * @package WordPress
 * @subpackage Site5 framework
 */
?><!DOCTYPE html>
    <!-- html -->
    <html <?php language_attributes(); ?>>

    <!-- head -->
	<head>

	<!-- title -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>

    <!-- meta -->
    <meta name ="viewport" content="width = 1020" />
    <meta name="generator" content="www.site5.com" />
    <?php if ( of_get_option('alltuts_enablemeta')== '1') { ?>
    <meta name="description" content="<?php echo of_get_option('alltuts_metadescription')  ?>" />
    <meta name="keywords" content="<?php wp_title(); ?>, <?php echo of_get_option('alltuts_metakeywords')  ?>" />
    <meta name="revisit-after" content="<?php echo of_get_option('alltuts_revisitafter')  ?> days" />
    <?php } ?>
    <?php if ( of_get_option('alltuts_enablerobot')== '1') { ?>
    <meta name="robots" content="<?php echo of_get_option('alltuts_metabots')  ?>" />
    <meta name="googlebot" content="<?php echo of_get_option('alltuts_metagooglebot')  ?>" />
    <?php } ?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
    <?php wp_head(); ?>
    
    <?php if(of_get_option('alltuts_css_code') != '') { ?>   
        <?php load_template( get_template_directory() . '/custom.css.php' );?>
    <?php } ?>
    
    <?php if(of_get_option('alltuts_customtypography') == '1') { ?>        
        <?php if(of_get_option('alltuts_heading_font_link') != '') { ?>
        <?php echo of_get_option('alltuts_heading_font_link');?>
        <?php } ?>
    
        <?php load_template( get_template_directory() . '/custom.typography.css.php' );?>
    <?php } ?>
    
</head>

<body>
<!-- Begin #wrapper -->
<div id="wrapper">
	<!-- Begin #header -->
	<header>
		<div id="logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <?php if ( !of_get_option('alltuts_clogo')== '') { ?>
					<img src="<?php echo of_get_option('alltuts_clogo'); ?>" alt="<?php echo bloginfo( 'name' ) ?>" />
				<?php } elseif( !of_get_option('alltuts_clogo_text')== '') {
				        echo of_get_option('alltuts_clogo_text');
                    } else {
					bloginfo( 'name' );
				    }?>
                </a>
                <span><?php bloginfo('description'); ?></span>
        </div>
		<!-- Begin #topMenu -->
		<?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_id' => 'topMenu', 'container_class' => 'ddsmoothmenu', 'fallback_cb'=>'primarymenu') );
				}else{
					primarymenu();
			}?>
			
		<!-- End #topMenu -->
		<!-- Begin #topMenuRight -->
			<div id="topMenuRight">
			<?php if ( function_exists( 'wp_nav_menu' ) ){
					wp_nav_menu( array( 'theme_location' => 'secondary-menu','fallback_cb'=>'secondarymenu') );
				}else{
					secondarymenu();
			}?>

			</div>
		<!-- End #topMenuRight -->
		<!-- Begin #socialLinks -->
			<div id="socialLinks">
				<?php if(of_get_option('alltuts_linkedin_link')!=""){ ?>
				<a href="<?php echo of_get_option('alltuts_linkedin_link'); ?>" class="linkedin" title="<?php _e("Join us on LinkedIn!", "site5framework"); ?>"><?php _e("Join us on LinkedIn!", "site5framework"); ?></a>
				<?php }?>
				<?php if(of_get_option('alltuts_facebook_link')!=""){ ?>
				<a href="<?php echo of_get_option('alltuts_facebook_link'); ?>" class="facebook" title="<?php _e("Join us on Facebook!", "site5framework"); ?>"><?php _e("Join us on Facebbook!", "site5framework"); ?></a>
				<?php }?>
				 <?php if(of_get_option('alltuts_twitter_user')!=""){ ?>
				<a href="http://twitter.com/<?php echo of_get_option('alltuts_twitter_user'); ?>" class="twitter" title="<?php _e("Follow Us on Twitter!", "site5framework"); ?>"><?php _e("Follow Us on Twitter!", "site5framework"); ?></a>
			<?php }?>
                <?php if(of_get_option('alltuts_rss_link')!=""){ ?>
    				<a href="<?php echo of_get_option('alltuts_rss_link'); ?>" title="RSS" class="rss"><?php _e("Subscribe to our RSS Feed!", "site5framework"); ?></a>
    			<?php } else { ?>
				<a href="<?php bloginfo('rss2_url'); ?>" title="RSS" class="rss"><?php _e("Subscribe to our RSS Feed!", "site5framework"); ?></a>
                <?php } ?>
			</div>
		<!-- End #socialLinks -->
	</header>
	<!-- End #header -->
	
	<!-- Begin #content -->
	<div id="content" class="clearfix">