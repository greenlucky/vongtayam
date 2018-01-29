<?php
/*********************************************************************************************

This theme uses wp_nav_menu() in one location.

*********************************************************************************************/
register_nav_menus(                      		// wp3+ menus
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' )
		)
	);
    
function primarymenu(){ ?>
			<div class="ddsmoothmenu" id="topMenu">
				<ul>
					<?php wp_list_categories('hide_empty=1&exclude=1&title_li='); ?>
				</ul>
			</div>
<?php }

function secondarymenu(){ ?>
			<ul>
				<?php wp_list_pages('&title_li='); ?>
			</ul>
<?php }
	
function fallbackmenu(){
	//echo'<div id="topMenu">';
    echo'<ul class="sf-menu">';
    wp_list_pages('title_li=');
    echo'</ul>';
	//echo'</div>';
}

function site5_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(
    	array(
    		'menu' => 'main_nav', /* menu name */
    		'theme_location' => 'main_nav', /* where in the theme it's assigned */
			'container' =>false,
			'menu_class' => 'sf-menu', /* menu class */
    		'fallback_cb' => 'site5_main_nav_fallback' /* menu fallback */
    	)
    );
}

function site5_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(
    	array(
    		'menu' => 'footer_links', /* menu name */
    		'theme_location' => 'footer_links', /* where in the theme it's assigned */
    		'container_class' => 'footer-links clearfix', /* container class */
    		'fallback_cb' => 'site5_footer_links_fallback' /* menu fallback */
    	)
	);
}

// this is the fallback for header menu
function site5_main_nav_fallback() {
	echo'<ul class="sf-menu">';
    wp_page_menu( 'show_home=Home' );
	echo'</ul>';
}

// this is the fallback for footer menu
function site5_footer_links_fallback() {
	/* you can put a default here if you like */
}


?>