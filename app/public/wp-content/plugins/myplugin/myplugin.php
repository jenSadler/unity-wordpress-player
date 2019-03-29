 <?php
 /*
 Plugin Name:  MyPlugin
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

if(!defined('ABSPATH')){
 exit;
}

if (is_admin()){
  require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-page.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-callbacks.php';
}

function myplugin_options_default(){
  return array(
    'custom_url'    => 'https://wordpress.org/',
    'custom_title' => 'Powered by JenPress',
    'custom_style' => 'disable',
    'custom_message' => '<p class="custom-message">Don\'t buy things you don\'t need!</p>',
    'custom_footer' => 'Refuse it, reuse it, repair it',
    'custom_toolbar' => 'false',
    'custom_scheme' => 'default'
  );
}


add_action('admin_init', "myplugin_register_setting");
add_action('admin_menu', 'myplugin_add_sublevel_menu');

 ?>
