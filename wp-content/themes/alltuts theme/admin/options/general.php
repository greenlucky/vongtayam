<?php
$options[] = array( "name" => "General",
						"sicon" => "advancedsettings.png",
                        "type" => "heading");


    $options[] = array( "name" => "Your Company Logo",
                        "desc" => "You can use your own company logo. Click to 'Upload Image' button and upload your logo.",
                        "id" => $shortname."_clogo",
                        "std" => "$blogpath/logo.png",
                        "type" => "upload");
                        
    $options[] = array( "name" => "Text as Logo",
                        "desc" => "If you don't upload your own company logo, this text will show up in it's place.",
                        "id" => $shortname."_clogo_text",
                        "std" => "AllTuts",
                        "type" => "text");                            
    

    $options[] = array( "name" => "Custom Favicon",
                        "desc" => "You can use your own custom favicon. Click to 'Upload Image' button and upload your favicon.",
                        "id" => $shortname."_custom_shortcut_favicon",
                        "std" => "",
                        "type" => "upload");
    
    $options[] = array( "name" => "Posts List Layout",
                        "desc" => "",
                        "id" => $shortname."_posts_layout",
                        "std" => 0,
                        "type" => "select",
                        "options" => array(0=>"Thumbnail with excerpt",1=>"Full content"));
    
?>