<?php 
    $options[] = array( "name" => "Ads",
    					"sicon" => "money.png",
						"type" => "heading");
    
    $options[] = array( "name" => "Show ads?",
                        "desc" => "In order to show the ads, you must install the plugin 'WP125'. You can get it <a href=\"http://www.webmaster-source.com/wp125-ad-plugin-wordpress/\" target=\"_blank\">here</a>.",
                        "id" => $shortname."_ads",
                        "std" => "no",
                        "type" => "select",
                        "options" => array("yes"=>"yes","no"=>"no"));
                        
    $options[] = array( "name" => "Advertise page",
                        "desc" => "",
                        "id" => $shortname."_advertise",
                        "std" => "",
                        "type" => "select",
                        "options" => $options_pages );
                        
?>