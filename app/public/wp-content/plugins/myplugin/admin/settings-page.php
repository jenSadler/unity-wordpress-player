<?php //MyPlugin - Settings Page
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
