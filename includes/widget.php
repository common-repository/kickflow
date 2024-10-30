<?php

// install kickflow widget
add_action('wp_head', 'install_kickflow');

function install_kickflow()
{
  if ( is_feed() || is_robots() || is_trackback() )
  {
    return;
  }
  $options = get_option('kickflow_settings');
  if( empty( $options ) )
  {
    return;
  }

    $kickflow = $options['kickflow_installation_code'];   
    $allow_page = 0;
    if(in_array(-1,  $options['kickflow_pages']))
    {
      $allow_page = 1;
    }else
    {
      if(in_array(get_the_ID(),  $options['kickflow_pages']))
      {
        $allow_page = 1;
      }
    }

    if ( $kickflow && $allow_page )
    {
      echo $kickflow;
    }
  
  }
?>