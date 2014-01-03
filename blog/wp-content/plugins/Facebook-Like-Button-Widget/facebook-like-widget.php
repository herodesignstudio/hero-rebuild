<?php
/*
Plugin Name: Facebook Like Widget
Plugin URI: http://allanjosephbatac.com
Description: Add a Facebook 'Like' Button Widget to your post pages. Increase visitors!
Author: AJ Batac
Version: 0.1
Author URI: http://allanjosephbatac.com
*/

function add_facebook_like($the_iframe = '')
{
	$the_perma	= rawurlencode(get_permalink());
	$the_iframe	.= '<div id="facebook_like"><iframe src="http://www.facebook.com/plugins/like.php?href='.$the_perma.'&amp;layout=button_count&amp;show-faces=false&amp;width=450&amp;action=like&amp;font=arial&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:35px"></iframe></div>';
	return $the_iframe;
}

add_action('the_content', 'add_facebook_like');
?>