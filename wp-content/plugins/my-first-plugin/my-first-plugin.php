<?php
/*
Plugin Name: My plugin
Plugin URI: https://sefferjaana.ikt.khk.ee/
Description: This is my first WordPress Plugin
Author: Pippin Williamson
Author URI: https://sefferjaana.ikt.khk.ee/
Version: 1.0
*/

function my_plugin_test() {
	echo 'Hello World'; exit;
}
add_action('admin_head', 'my_plugin_test');