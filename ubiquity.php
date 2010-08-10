<?php
/*
Plugin Name: Ubiquity Toolbar
Plugin URI: http://p2.importantmedia.org
Description: The Everything Plugin for the Important Media Network
Version: 0.2
Author: Jacob Luer
Author URI: http://incatern.com
License: MIT
*/

require_once('includes/wp-admin.php');
require_once('includes/wp-social.php');
require_once('includes/wp-widgets.php');


  add_action('wp_print_scripts', 'ubiquity_scripts_action', 50);
  add_action('wp_print_styles', 'ubiquity_styles_action');
  
  add_action('wp_footer','ubiquity_print_tracker_bodybottom');



function ubiquity_print($function) {
  if (!get_option('ubiq_shownavbar') && !is_admin()) { return; }

	switch ($function) {
		case "navigation": //legacy
			ubiquity_print_navigation();
			break;
		case "tracker_bodytop": //legacy
			ubiquity_print_tracker_bodytop();
			break;
		case "tracker_bodybottom":
			//ubiquity_print_tracker_bodybottom();
			break;
		case "navbar_header":
		  ubiquity_print_tracker_bodytop();
		  ubiquity_print_navigation();
		  break;
	}
}


function ubiquity_print_navigation() {
	
	include("includes/ubiquity-nav.php");
	
}

function ubiquity_print_tracker_bodytop() { ?>

<?php
}

function ubiquity_print_tracker_bodybottom() { 
  if (!get_option('ubiq_shownavbar') && !is_admin()) { return; }
?>
	<script type='text/javascript'> var mp_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://'); document.write(unescape('%3Cscript src="' + mp_protocol + 'api.mixpanel.com/site_media/js/api/mixpanel.js" type="text/javascript"%3E%3C/script%3E')); </script> <script type='text/javascript'> try {  var mpmetrics = new MixpanelLib('a32eb79d576c46f49e555808f0e9bf7a'); } catch(err) { null_fn = function () {}; var mpmetrics = {  track: null_fn,  track_funnel: null_fn,  register: null_fn,  register_once: null_fn, register_funnel: null_fn }; } </script>
<?php
}

function ubiquity_scripts_action() {
	if (!get_option('ubiq_shownavbar') && !is_admin()) { return; }
	global $user_login;
	
	$ubiquity_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );

	$local_user = '';
	if(is_user_logged_in()) {
		get_currentuserinfo();
		$local_user = $user_login;
	}
	wp_enqueue_script('ubiquity_jplug', $ubiquity_plugin_url.'/scripts/ubiquity.jplug.1.0.js', array('jquery'));
	wp_localize_script( 'ubiquity_jplug', 'UbiquitySettings', array(
		  	'username' => $local_user
		));
}

function ubiquity_styles_action() {
	if (!get_option('ubiq_shownavbar') && !is_admin()) { return; }
	
	$ubiquity_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	wp_register_style('ubiquity_style', $ubiquity_plugin_url.'/css/ubiquity_nav.css');
	wp_enqueue_style('ubiquity_style');
}
 
function ubiquity_print_init_script() { ?>

<?php
}

function ubiq_get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

function ubiq_custom_avatar($id) {
	if (function_exists('author_avatar_url')) return author_avatar_url($id);
}

?>