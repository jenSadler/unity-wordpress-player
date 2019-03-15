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

function myplugin_display_settings_page(){
  if(!current_user_can("manage_options")) return;

  ?>
  <div class="wrap">
    <h1><?php echo esc_html(get_admin_page_title());?></h1>
    <form action = "options.php" method="post">
      <?php
        //output security fields
        settings_fields("myplugin_options");

        //output settings sesctions
        do_settings_sections("myplugin");

        //submit button
        submit_button();
       ?>
     </form>
   </div>
  <?php
}
  /*function myplugin_add_toplevel_menu(){
    /* parameters
      page Title
      menu Title
      capability
      menu slug
      callable function
      icon url
      position

    **
    add_menu_page(
        "MyPlugin Settings",
        "myPlugin",
        "manage_options",
        "myplugin",
        "myplugin_display_settings_page",
        "dashicons-admin-generic",
        null
      );
  }*/

  function myplugin_add_sublevel_menu(){
    add_submenu_page(
        "options-general.php",
        "MyPlugin Settings",
        "myPlugin",
        "manage_options",
        "myplugin",
        "myplugin_display_settings_page",
        "dashicons-admin-generic",
        null
      );
  }

  //add_action('admin_menu', 'myplugin_add_toplevel_menu');

  add_action('admin_menu', 'myplugin_add_sublevel_menu');

 ?>
