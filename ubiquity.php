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



  add_action('admin_menu','ubiq_superadmin_menu');

  add_action('wp_print_scripts', 'ubiquity_scripts_action', 50);
  add_action('wp_print_styles', 'ubiquity_styles_action');

function ubiq_superadmin_menu() {
	global $menu;

	if (version_compare(get_bloginfo('version'), '2.9', '>='))
	$menu[27] = array('', 'read', 'separator-dolores', '', 'wp-menu-separator');

	add_menu_page(__('Ubiquity Network Configuration', 'ubiquity-network-config'), __('Ubiquity', 'ubiquity-title'), 'update_core', 'ubiquity-network-config', 'ubiq_options_network', '',28); #wp

	add_submenu_page('ubiquity-network-config', __('Network Options', 'ubiq-netopts'), __('Network Options', 'ubiq-netopts'), 'update_core', 'ubiquity-network-config', 'ubiq_options_network'); #wp
	add_submenu_page('ubiquity-network-config', __('Analytics Options', 'ubiq-socialopts'), __('Analytics Options', 'ubiq-analyticsopts'), 'update_core', 'ubiquity-analytics-config', 'ubiq_options_analytics'); #wp
	add_submenu_page('ubiquity-network-config', __('Social Identities', 'ubiq-socialopts'), __('Social Identities', 'ubiq-socialopts'), 'update_core', 'ubiquity-social-config', 'ubiq_options_social'); #wp
	
	add_action('admin_init','ubiq_register_settings');
	
}

function ubiq_register_settings() {
  register_setting('ubiq-network-settings','ubiq_shownavbar');
}

function ubiq_options_network() {
  ?>
  
  
  <div class="wrap">
    <h2>Ubiquity Network Options</h2>
    <form name="ubiq-net-options" method="post" action="options.php">
      <?php settings_fields('ubiq-network-settings') ?>
      
      <table class="form-table">
        <tbody>
          <tr valign="top">
            <th scope="row">
              <label for="navbar_enabled">Network Navigation Bar</label>
            </th>
            <td>
              <label for"navbar_enabled">
                <?php 
                  $check_shownavbar = '';
                  if (get_option('ubiq_shownavbar'))
                    $check_shownavbar = ' checked="checked" ';
                ?>
                <input type="checkbox" id="ubiq_shownavbar" name="ubiq_shownavbar" value="ubiq_shownavbar" <?php echo $check_shownavbar ?> /> Show NavBar
              </label>
            </td>
          </tr>
        </tbody>
      </table>
      <p class="submit">
        <input class="button-primary" type="submit" value="Save Changes" name="Submit"/>
      </p>
    </form>
  
  </div>
  <?php
}

function ubiq_options_analytics() {
  ?>
  
  
  <div class="wrap">
    <h2>Ubiquity Analytics Options</h2>
    
  
  </div>
  <?php
}

function ubiq_options_social() {
  ?>
  
  
  <div class="wrap">
    <h2>Ubiquity Social Options</h2>
    
  
  </div>
  <?php
}

function ubiquity_print($function) {
	global $wpdb;
	$blogid = $wpdb->blogid;
	$site_array = array(1,76,1248,1263,1275,1294,1318,1319,1323,1329,1331,1342,1335);
	
	if ((!is_admin()) && in_array($blogid, $site_array)) {
		switch ($function) {
			case "navigation":
				ubiquity_print_navigation();
				break;
			case "tracker_bodytop":
				ubiquity_print_tracker_bodytop();
				break;
			case "tracker_bodybottom":
				ubiquity_print_tracker_bodybottom();
				break;
		}
	}
}


function ubiquity_print_navigation() {
	
	include("includes/ubiquity-nav.php");
	
}

function ubiquity_print_tracker_bodytop() { ?>

<?php
}

function ubiquity_print_tracker_bodybottom() { ?>
	<script type='text/javascript'> var mp_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://'); document.write(unescape('%3Cscript src="' + mp_protocol + 'api.mixpanel.com/site_media/js/api/mixpanel.js" type="text/javascript"%3E%3C/script%3E')); </script> <script type='text/javascript'> try {  var mpmetrics = new MixpanelLib('a32eb79d576c46f49e555808f0e9bf7a'); } catch(err) { null_fn = function () {}; var mpmetrics = {  track: null_fn,  track_funnel: null_fn,  register: null_fn,  register_once: null_fn, register_funnel: null_fn }; } </script>
	<script type="text/javascript">
	mpmetrics.register_funnel('IM Toolbar Funnel', [
	        'Open Toolbar', 
	        'Select Category', 
	        'Visit Site'
	    ]
	);
	
	</script>
<?php
}

function ubiquity_scripts_action() {
	global $wpdb, $current_user;
	$blogid = $wpdb->blogid;
	$site_array = array(1,76,1248,1263,1275,1294,1318,1319,1323,1329,1331,1342,1335);
	$ubiquity_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	
	if ((!is_admin()) && in_array($blogid, $site_array)) {
		$local_user = '';
		if(is_user_logged_in()) {
			get_currentuserinfo();
			$local_user = $current_user->user_login;
		}
		
		wp_enqueue_script('ubiquity_jplug', $ubiquity_plugin_url.'/scripts/ubiquity.jplug.1.0.js', array('jquery'));
		wp_localize_script( 'ubiquity_jplug', 'UbiquitySettings', array(
			  	'username' => $local_user
			));
	}
}

function ubiquity_styles_action() {
	global $wpdb;
	$blogid = $wpdb->blogid;
	$site_array = array(1,76,1248,1263,1275,1294,1318,1319,1323,1329,1331,1342,1335);
	$ubiquity_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	if ((!is_admin()) && in_array($blogid, $site_array)) {
		wp_register_style('ubiquity_style', $ubiquity_plugin_url.'/css/ubiquity_nav.css');
		wp_enqueue_style('ubiquity_style');
	}
}
 
function ubiquity_print_init_script() { ?>
<script type="text/javascript">

</script>
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