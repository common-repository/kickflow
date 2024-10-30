<?php

// initialize settings
function kickflow_init_settings()
{
  register_setting( 'kickflow_settings_group', 'kickflow_settings' );
}
add_action( 'admin_init', 'kickflow_init_settings' );

// Delete options on uninstall
function kickflow_uninstall()
{
  delete_option( 'kickflow_settings' );
}
register_uninstall_hook( __FILE__, 'kickflow_uninstall' );


?>
