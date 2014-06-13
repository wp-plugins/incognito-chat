<div class="wrap">
    <h2>Incognito chatroulette</h2>
    <form method="post" action="options.php">
        <?php settings_fields('incognito-chat-widget-options'); ?>
        <?php do_settings_fields('incognito-chat-widget-options', "buttonOptions"); ?>                        
        <?php include INCTCHATWIDGET_DIR . "admin/settings/form/index.php"; ?>
        <?php include INCTCHATWIDGET_DIR . "admin/settings/widget/index.php"; ?>
        <?php submit_button(); ?>
    </form>
</div>