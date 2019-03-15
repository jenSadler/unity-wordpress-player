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

function myplugin_register_setting(){

  register_setting('myplugin_options', 'myplugin_options', 'myplugin_callback_validate_options');
  add_settings_section('myplugin_section_login','Customize Login Page','myplugin_callback_section_login','myplugin');
  add_settings_field('custom_url','Custom URL','myplugin_callback_field_text','myplugin','myplugin_section_login',['id'=>'custom_url','label'=>'Custom URL for the login logo link']);
  add_settings_field('custom_title','Custom Title','myplugin_callback_field_text','myplugin','myplugin_section_login',['id'=>'custom_title','label'=>'Custom title for the login']);
  add_settings_field('custom_style','Custom Style','myplugin_callback_field_radio','myplugin','myplugin_section_login',['id'=>'custom_style','label'=>'Custom CSS for the login screen']);

  add_settings_section('myplugin_section_admin','Customize Admin Area','myplugin_callback_section_admin','myplugin');
  add_settings_field('custom_message','Custom Message','myplugin_callback_field_textarea','myplugin','myplugin_section_admin',['id'=>'custom_message','label'=>'Custom message for the admin screen']);
  add_settings_field('custom_footer','Custom Footer','myplugin_callback_field_text','myplugin','myplugin_section_admin',['id'=>'custom_footer','label'=>'Custom footer text for the admin screen']);
  add_settings_field('custom_toolbar','Custom ToolBar','myplugin_callback_field_checkbox','myplugin','myplugin_section_admin',['id'=>'custom_toolbar','label'=>'Remove new post and comment links from the toolbar']);
  add_settings_field('custom_scheme','Custom Scheme','myplugin_callback_field_select','myplugin','myplugin_section_admin',['id'=>'custom_scheme','label'=>'Default color scheme for new users']);
}

function myplugin_callback_section_login(){
  echo "Log In Section. Edit this all now here plz.";
}

function myplugin_callback_field_text($args){
echo "<p>".$args['label']  ." [text]</p>";
}

function myplugin_callback_field_textarea($args){
echo "<p>".$args['label']  ." [textarea]</p>";
}
function myplugin_callback_field_radio($args){
  echo "<p>".$args['label']  ." [radio]</p>";
}
function myplugin_callback_field_checkbox($args){
  echo "<p>".$args['label']  ." [checkboxes]</p>";
}

function myplugin_callback_field_select($args){
  echo "<p>".$args['label']  ."[selection field]</p>";
}


function myplugin_callback_section_admin(){
  echo "Admin Section. Edit me here. <ul style='list-style-type: square;margin-left:50px'><li>hi!</li><li>hows it going?!</li><li>what up?</li></ul>";
}

function myplugin_callback_validate_options(){

}

add_action('admin_init', "myplugin_register_setting");
add_action('admin_menu', 'myplugin_add_sublevel_menu');

 ?>
