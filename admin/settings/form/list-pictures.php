<?php
$dir = "public/assets/img/widgets/";
$files = scandir(INCTCHATWIDGET_DIR . $dir, 0);
?>
<div data-type="pic" style="width: 100%">
    <ul>
        <?php foreach ($files as $i => $file) { ?>
            <?php if (is_file(INCTCHATWIDGET_DIR . $dir . $file)) { ?>
                <li style="float: left;display: block;border: 1px dotted #474547; height: 100px;margin: 5px; padding: 5px;">
                    <label for="img<?php echo $i; ?>">
                        <img style="max-height: 80px;  float: left;" src="<?php echo INCTCHATWIDGET_URL . $dir . $file ?>">
                        <br>
                    </label>
                    <input <?php echo (@$options["widget_picture"] == trim(INCTCHATWIDGET_URL . $dir. $file) ? "checked=checked" : ""); ?> type="radio" name="inctchatWidgetOptions[widget_picture]" id="img<?php echo $i; ?>" value="<?php echo INCTCHATWIDGET_URL . $dir . $file ?>"><label for="img<?php echo $i; ?>"><?php echo esc_html($file) ?></label>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
    <div class="clearfix"></div>
    <hr>
    <i>Folder for new pictures: <?php echo INCTCHATWIDGET_DIR . $dir; ?></i>
</div>
<div class="clearfix"></div>