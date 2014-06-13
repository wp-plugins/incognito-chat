<?php

/**
 * @author Yuriy Antokhin <yuriyant@gmail.com>
 * @link http://incognito-chat.com/
 * @copyright 2014 Yuriyant
 */
class INCTCHATWIDGET_Integration_Widget {

    public function __construct() {
        add_action('init', array($this, '_init'));
    }

    public function _init() {
        //wp_enqueue_script('inctchat-widget', INCTCHATWIDGET_URL . 'public/assets/js/app/widget.js', array('jquery'), INCTCHATWIDGET_VERSION);
        add_action('wp_footer', array($this, 'widget_to_footer'));
    }

    public function widget_to_footer() {
        global $inctchat_helper;
        $options = get_option('inctchatWidgetOptions');        
        require(INCTCHATWIDGET_DIR . 'public/includes/view/fast-api/init.php');
    }

}
new INCTCHATWIDGET_Integration_Widget;
?>