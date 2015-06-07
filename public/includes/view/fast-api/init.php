<?php
global $inctchatwidget_helper;
$isMobile = $inctchatwidget_helper->mobileDetecthelper->isMobile();
$isTablet = $inctchatwidget_helper->mobileDetecthelper->isTablet();
$tab_position = 'tab_position: \'' . @$options['screenAlignment'] . '\',';
switch ($options['show_widget']) {
    case 'Visible only on PC':
        if ($isMobile || $isTablet) {
            $tab_position = false;
        }
        break;
    case 'Visible only on PC & Tabled':
        if ($isMobile) {
            $tab_position = false;
        }
        break;
    case 'Hide widget':
        $tab_position = false;
        break;
    default :
        break;
}
?>
<script>
    (function() {
        window.IncognitoChatWidgetOptions = {
            style: '<?php echo esc_html(@$options['style']) ?>',
            widget_picture: '<?php echo  esc_html(@$options['widget_picture']) ?>',
            <?php echo $tab_position ?>
            tab_color: '<?php echo esc_html(@$options['buttonColor']) ?>',
            assetsUrl: 'http://incognito-chat.yuriyant.com/incognito-chatroulette/app/static/public',
            openUrl: 'http://incognito-chat.yuriyant.com/incognito-chatroulette/',
            mobile: <?php echo ($isMobile || $isTablet) ? 1 : 0 ?>
        }
        var inctchat = document.createElement('script');
        inctchat.type = 'text/javascript';
        inctchat.async = true;
        inctchat.src = 'http://incognito-chat.yuriyant.com/incognito-chatroulette/app/static/public/js/app/widget.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(inctchat, s)
    })()
</script>
