<?php

class INCTCHATWIDGET_Admin_Menu {

    function __construct() {
        add_action('admin_menu', array($this, 'action_admin_menu'));
    }

    public function action_admin_menu() {
        
    }
}

new INCTCHATWIDGET_Admin_Menu();
?>
