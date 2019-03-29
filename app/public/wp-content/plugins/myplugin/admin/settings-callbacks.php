<?php


if(!defined('ABSPATH')){
exit;
}

function myplugin_callback_section_login(){
  echo "Log In Section. Edit this all now here plz.";
}

function myplugin_callback_section_admin(){
  echo "Admin Section. Edit me here. <ul style='list-style-type: square;margin-left:50px'><li>hi!</li><li>hows it going?!</li><li>what up?</li></ul>";
}

function myplugin_callback_validate_options($input){
  return $input;
}

function myplugin_callback_field_text($args){
  $options = get_option('myplugin_options', myplugin_options_default());

  $id = isset($args["id"]) ? $args["id"] : '';
  $label = isset($args["label"]) ? $args["label"] : '';

  $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

  echo '<input id="myplugin_options_'.$id.'" name = "myplugin_options['.$id.']" type="text" size = "40" value="'.$value.'"><br/>';
  echo '<label for= myplugin_options_'.$id.'">'.$label. '</label>';
}

function myplugin_callback_field_textarea($args){
  $options = get_option('myplugin_options', myplugin_options_default());

  $id = isset($args['id']) ? $args['id'] : '';
  $label = isset($args['label']) ? $args['label'] : '';

  $allowed_tags = wp_kses_allowed_html('post');

  $value = isset($options[$id])? wp_kses(stripslashes_deep($options[$id]),$allowed_tags):'';

  echo '<textarea id="myplugin_options_'.$id.'" name = "myplugin_options['.$id.']" rows="5" cols="50">'.$value.'"</textarea><br/>';
  echo '<label for= myplugin_options_'.$id.'">'.$label. '</label>';
}

function myplugin_callback_field_radio($args){
  $options = get_option('myplugin_options', myplugin_options_default());

  $id = isset($args["id"]) ? $args["id"] : '';
  $label = isset($args["label"]) ? $args["label"] : '';

  $selected_option = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';

  $radio_options = array(
    'enable'=> 'Enable custom styles',
    'disable'=> 'Disable custom styles'
  );

  foreach($radio_options as $value=>$label){
    $checked = checked($selected_option === $value, true, false);
    echo '<label><input name = "myplugin_options['.$id.']" type = "radio" value="'.$value.'"'.$checked.'>';
    echo '<span>'.$label.'</span></label><br/>';
  }

}


function myplugin_callback_field_checkbox($args){
  $options = get_option('myplugin_options', myplugin_options_default());

  $id = isset($args["id"]) ? $args["id"] : '';
  $label = isset($args["label"]) ? $args["label"] : '';

  $checked = isset($options[$id]) ? checked($options[$id],1,false) : '';
  echo '<input id="myplugin_options_'.$id.'" name = "myplugin_options['.$id.']" type="checkbox" value="1"'.$checked.'>';
  echo '<label for= myplugin_options_'.$id.'">'.$label. '</label>';

}

function myplugin_callback_field_select($args){
  echo "<p>".$args['label']  ."[selection field]</p>";
}



?>
