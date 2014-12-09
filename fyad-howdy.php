<?php
/**
 * Plugin Name: FYAD Howdy
 * Plugin URI: https://github.com/joeguilmette/fyad-howdy
 * Description: Removes "Howdy, $user" from the admin bar and hides the admin bar from the front end.
 * Version: 1.0.0
 * Author: Joe Guilmette
 * Author URI: http://joeguilmette.com
 * License: MIT
 */

defined('ABSPATH') or die("Oops.");

//Replace Howdy
function replace_howdy( $wp_admin_bar ) {
$my_account=$wp_admin_bar->get_node('my-account');
$newtitle = str_replace( 'Howdy,', '', $my_account->title );
$wp_admin_bar->add_node( array(
'id' => 'my-account',
'title' => $newtitle,
) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');

?>