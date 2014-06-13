<?php

class INCTCHATWIDGET_Settings {

    public function __construct() {
        add_action('admin_menu', array($this, 'addAdminMenu'));
        add_action('admin_init', array($this, 'register_inctchatwidget_options'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    /*
     * Cabinet
     */

    public function enqueue_scripts() {
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script(
                INCTCHATWIDGET, INCTCHATWIDGET_URL . 'admin/assets/js/settings.js', array(
            'jquery', 'jquery-ui-core',
            'jquery-ui-widget', 'jquery-ui-mouse', 'jquery-ui-draggable',
            'wp-color-picker'
                )
        );
    }

    public function register_inctchatwidget_options() {
        register_setting('incognito-chat-widget-options', 'inctchatWidgetOptions');
    }

    public function addAdminMenu() {
        add_options_page('Incognito chat widget', 'Incognito chat widget', 'manage_options', 'incognito-chat-widget-options', array($this, 'showOptions'));
    }

    public function showOptions() {
        if (!current_user_can('manage_options')) {
            wp_die('You do not have sufficient permissions to access this page.');
        }
        $options = get_option('inctchatWidgetOptions');
        if (!$options) {
            $options = self::_getDefaultOptions();
        }
        include INCTCHATWIDGET_DIR . "admin/settings/form.php";
    }

    private function _getDefaultOptions() {
        $options = array(
            "style" => "picture",
            "widget_picture" => INCTCHATWIDGET_URL . "public/assets/img/widgets/1.png",
            "show_widget" => "Visible only on PC",
            "buttonColor" => "#999999",
            "screenAlignment" => "bottom-right",
        );
        return $options;
    }

    static function activation_hook() {
        if (!$options = get_option('inctchatWidgetOptions')) {
            add_option('inctchatWidgetOptions', self::_getDefaultOptions());
        }
    }

    static function deactivation_hook() {
        delete_option('inctchatwidget_version');
        delete_option('inctchatWidgetOptions');
    }


    

}

new INCTCHATWIDGET_Settings();
?>