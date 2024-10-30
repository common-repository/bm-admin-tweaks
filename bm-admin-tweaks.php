<?php
/*
Plugin Name: BM Admin Tweaks
Plugin URI: http://www.binarymoon.co.uk/projects/bm-custom-admin/
Description: Tweaks to the display of the Wordpress administration panel
Author: Ben Gillbanks
Version: 1
Author URI: http://www.binarymoon.co.uk/
*/ 

add_action('admin_head', 'bm_custom_admin',2);

function bm_custom_admin() {

	$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename( dirname( __FILE__ ) ) ;
	
	?>
	
	<link rel="stylesheet" href="<?php echo $plugin_url; ?>/bm-admin-tweaks.css" media="screen, handheld, projection" />

	<?php
}

?>
