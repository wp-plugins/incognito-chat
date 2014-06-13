<?php

/**
  Plugin Name: Incognito chat (widget)
  Plugin URI: http://incognito-chat.com/
  Description: Incognito chat (widget) for WordPress
  Version: 1.0.0
  Author: Yuriy Antokhin
  Author URI: http://about.me/yuriyant
 */

define('INCTCHATWIDGET', 'incognito_chat_widget');
define('INCTCHATWIDGET_VERSION', '1.0.0');
define('INCTCHATWIDGET_DIR', plugin_dir_path(__FILE__));
define('INCTCHATWIDGET_URL', plugin_dir_url(__FILE__));




require INCTCHATWIDGET_DIR . 'admin/settings.php';
require INCTCHATWIDGET_DIR . 'public/includes/helpers/main.php';


if (is_admin()) {
    require INCTCHATWIDGET_DIR . '/admin/menu.php';
} else {
    require INCTCHATWIDGET_DIR . 'public/includes/wp-actions/init-js-api.php';
}


register_deactivation_hook(__FILE__, array('INCTCHATWIDGET_Settings', 'deactivation_hook'));
register_activation_hook(__FILE__, array('INCTCHATWIDGET_Settings', 'activation_hook'));
