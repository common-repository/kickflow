<?php

add_action('admin_menu', 'add_kickflow_to_menu');

add_action('admin_bar_menu', 'add_kickflow_to_menu_bar', 999);

// Include kickflow in the admin top menu bar
function add_kickflow_to_menu_bar()
{
  global $wp_version;
  global $wp_admin_bar;

  $icon = '<img src="' . KICKFLOW_PATH_74BFEF808DDF3 . '/assets/kickflow-icon-white.png' . '">';

  $args = array(
    'id' => 'kickflow-admin-menu',
    'title' => '<span class="ab-icon" ' . ($wp_version < 3.8 && !is_plugin_active('mp6/mp6.php') ? ' style="margin-top: 3px;"' : '') . '>' . $icon . '</span><span class="ab-label">kickflow</span>', 
    'parent' => FALSE,  
    'href' => get_bloginfo('wpurl') . '/wp-admin/admin.php?page=nav.php',
    'meta' => array('title' => 'kickflow widget')
  );

  $wp_admin_bar->add_node($args);
}
// Include kickflow in the admin main menu bar
function add_kickflow_to_menu()
{
  add_options_page('kickflow widget', 'kickflow', 'activate_plugins', basename(__FILE__), 'kickflow_options_page');
}

?>
