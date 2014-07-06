<?php
/*
Plugin Name: Juz Comment
Plugin URI: http://www.juzhax.com/
Description: Juz Comment
Version: 1.0
Author: Justin Soo ( JuzHax )
Author URI: http://www.juzhax.com/
License: GPL2
*/

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "8080") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function Juz_comment_form() {
//	echo 'hello';
//	echo current_page_url();
	if ( get_post_status ( get_the_ID() ) == 'publish' ) {
		echo '<div class="fb-comments" data-href="'.current_page_url().'" data-width="100%" data-numposts="10" data-colorscheme="light"></div>';
	}


}


add_action('tha_comments_before','Juz_comment_form');

?>