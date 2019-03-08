<?php
/*
Plugin Name:  Simple Example Plugin
Description:  Intro to wordpress development
Plugin URI:   https://github.com/jenSadler/unity-wordpress-player
Author:       Jen Sadler
Version:      1.0
License:      GPLv2 or later
Licence URI:   https://www.gnu.org/licences/gpl-3.0.txt

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty or MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

function myplugin_action_hook_example(){
  wp_mail ('jennifer.sadler@gmail.com', 'Subject','Message...');
}

function myplugin_filter_hook_example($content){
  $content = $content . '<p>CUSTOM CONTENT BABY!</p>';
  return $content;
}

function myplugin_on_activation(){
  if(! current_user_can('activate_plugins')) return;

  add_option('myplugin_posts_per_page',10);
  add_option('myplugin_show_welcome_page',true);
}

function myplugin_on_deactivation(){

  if(! current_user_can('activate_plugins')) return;

  flush_rewrite_rules();
}

function myplugin_on_uninstall(){
  if(! current_user_can('activate_plugins')) return;

  delete_option('myplugin_posts_per_page',10);
  delete_option('myplugin_show_welcome_page',true);
}

add_action('init', 'myplugin_action_hook_example');
add_filter('the_content','myplugin_filter_hook_example');
register_activation_hook(__FILE__,'myplugin_on_activation');
register_deactivation_hook(__FILE__,'myplugin_on_deactivation');
register_uninstall_hook(__FILE__, 'myplugin_on_uninstall');
?>
