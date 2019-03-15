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
}

function myplugin_register_setting('myplugin_options', 'myplugin_options', 'myplugin_callback_validate_options'){
  add_settings_section('myplugin_section_login','Customize Login Page','myplugin_callback_section_login','myplugin');
  add_settings_section('myplugin_section_admin','Customize Admin Area','myplugin_callback_section_admin','myplugin');
}
function myplugin_callback_section_login(){
  "Log In Section. Edit this all now here plz."
}

function myplugin_callback_section_admin(){
  "Admin Section. Edit me here"
}

function myplugin_callback_validate_options(){

}

add_action('admin_init', "myplugin_register_setting");
add_action('admin_menu', 'myplugin_add_sublevel_menu');

 ?>
