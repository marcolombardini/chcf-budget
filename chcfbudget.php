<?php
/*
 * Plugin Name: CHCF Budget
 * Plugin URI: https://github.com/marcolombardini/
 * Description: Only use if your are comfortable editing PHP files and are familar with your theme 
 * Author URI: https://www.chcfinc.org
 * Version: 0.1
 * Text Domain: chcfbud
 * License: GPL2
 * Contributors: Marco Lombardini
 */
if (class_exists("GFForms")) {
	
register_activation_hook( __FILE__, array( 'chcfbud', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'chcfbud', 'plugin_deactivation' ) );
 
 function chcfbud_shortcode(){
	$x = do_shortcode('100');
	$y = do_shortcode('[gravitywp_count formid="4" number_field="1"]');
	$z = $y + $x;
    return $z;
}
}
add_shortcode('bud', 'chcfbud_shortcode');
?>

add_shortcode(‘mysum’,’tsum_mysum’);
function tsum_mysum() {
$a = do_shortcode(“[gravitywp_count formid=’1′ start_date=’01/01/2018′ end_date=’12/31/2018′ created_by=’current’]”);
$b = do_shortcode(“[gravitywp_count formid=’8′ start_date=’01/01/2018′ end_date=’12/31/2018′ created_by=’current’]”);
$c = $a + $b;

if ($c <20) { return “Friend”; }
if ($c >19 && $c<40) { return “Family”; }
if ($c >39) { return “Soulmate”; }

}
