<?php 
add_theme_support ("post-thumbnails");
add_theme_support( 'title-tag' );


// widget sidebar
function widgets1(){
	register_sidebar(
		array(
			"id" => "widgetuno",
			"name" => "widgetuno",
			"description" => "widgetuno",

		)
	);
}
add_action("widgets_init","widgets1" );

 ?>