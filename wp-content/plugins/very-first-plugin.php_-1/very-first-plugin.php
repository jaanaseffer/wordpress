<?php
/*
Plugin Name: My First plugin
Plugin URI: https://sefferjaana.ikt.khk.ee/
Description: This is my first WordPress Plugin
Author: JŠ
Author URI: https://sefferjaana.ikt.khk.ee/
Version: 1.0
*/
function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );