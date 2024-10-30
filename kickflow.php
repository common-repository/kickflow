<?php
/*
 * Plugin Name: kickflow
 * Version: 1.1
 * Description: KickFlow is an AI-powered messaging app that makes it easy to target website visitors, qualify leads and drive well-timed actions.
 * Author: Kickflow
 * Author URI: https://kickflow.io
 * Plugin URI: https://kickflow.io/plugins/wordpress
 */

defined('ABSPATH') or die("Restricted access!");

define('KICKFLOW_DIR_74BFEF808DDF3', plugin_dir_path(__FILE__));
define('KICKFLOW_URL_74BFEF808DDF3', plugin_dir_url(__FILE__));
defined('KICKFLOW_PATH_74BFEF808DDF3') or define('KICKFLOW_PATH_74BFEF808DDF3', untrailingslashit(plugins_url('', __FILE__)));

require_once(KICKFLOW_DIR_74BFEF808DDF3 . 'includes/core.php');
require_once(KICKFLOW_DIR_74BFEF808DDF3 . 'includes/nav.php');
require_once(KICKFLOW_DIR_74BFEF808DDF3 . 'includes/admin.php');
require_once(KICKFLOW_DIR_74BFEF808DDF3 . 'includes/widget.php');


?>
