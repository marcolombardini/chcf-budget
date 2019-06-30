<?php
/*
 * Plugin Name: CHCF Budget
 * Plugin URI: https://github.com/marcolombardini/
 * Description: Only use if your are comfortable editing PHP files and are familar with your theme 
 * Author URI: https://www.chcfinc.org
 * Version: 0.1
 * Contributors: Marco Lombardini
 */
 
 function text_shortcode(){
	$x = do_shortcode('100');
	$y = do_shortcode('[gravitywp_count formid="8"]');
	$z = $y + $x;
    return $z;
}

add_shortcode('text', 'text_shortcode');
 
<?php
