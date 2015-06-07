<?php

/**
 * @author Yuriy Antokhin <yuriyant@gmail.com>
 * @link http://incognito-chat.yuriyant.com/
 * @copyright 2014 Yuriyant
 */
class INCTCHATWIDGET_Helper {

    public $mobileDetecthelper = false;

    public function __construct() {
        add_action('init', array($this, 'initHelper'), 1);
    }

    public function initHelper() {
        self::_mobileDetectHelper();
    }

    private function _mobileDetectHelper() {
        require_once INCTCHATWIDGET_DIR . 'public/includes/helpers/mobileDetect.php';
        $mobile_Detect_class = apply_filters('Mobile_Detect_INCTCHATWIDGET', 'Mobile_Detect_INCTCHATWIDGET');
        $this->mobileDetecthelper = new $mobile_Detect_class;
    }

}

$GLOBALS['inctchatwidget_helper'] = new INCTCHATWIDGET_Helper();
