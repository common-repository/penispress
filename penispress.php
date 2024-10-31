<?php
/*
Plugin Name: Penispress
Plugin URI: http://www.milchrausch.de
Description: Wordpress Penispress replaces every word in your blogpost with the word penis! Enjoy this cool stuff!
Version: 0.2.1
Author: Hauke Leweling
Author URI: http://www.milchrausch.de/
Update Server: http://www.milchrausch.de/wordpress-plugin-penispress/
Min WP Version: 2.7.0
Max WP Version: 2.7.1
*/

add_filter('the_content', 'addPenispress');

function addPenispress($content)
{
	$Result = null;
	
		$Contents = explode(" ",$content);
		
		foreach($Contents as $Key => $Wort)
		{
			$Result .= "Penis ";
		}

		return $Result;
}
?>