<?php


if(!defined('ABSPATH')){
exit;
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
?>
