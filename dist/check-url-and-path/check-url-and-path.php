<?php
/*
Plugin Name: Check URL and Path
Author: kurudrive
Description: Displays the plugin directory URL in the admin dashboard.
Version: 1.0
*/

// 管理画面にアラートを表示する関数
function cuap_display_info() {
	$plugin_dir_url = plugin_dir_url(__FILE__);
	$plugins_url = plugins_url('/',__FILE__);
    echo '<div class="notice notice-success is-dismissible">
			<ul>
            <li>plugin_dir_url(__FILE__) : ' . plugin_dir_url(__FILE__) . '</li>
            <li>plugins_url(\'/\',__FILE__) : ' . plugins_url('/',__FILE__) . '</li>
			</ul>
          </div>';
}
add_action('admin_notices', 'cuap_display_info');
?>
