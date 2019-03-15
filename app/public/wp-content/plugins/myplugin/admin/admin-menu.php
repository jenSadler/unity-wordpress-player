<?php //MyPlugin - Admin Menu

if(!defined('ABSPATH')){
 exit;
}

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
