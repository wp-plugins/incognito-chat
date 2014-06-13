<h3>Widget settings</h3>
<table class="form-table">
    <tbody> 
        <tr valign="top">
            <th scope="row"><label for="feedbackColors">Show widget</label></th>
            <td>
                <select  name="inctchatWidgetOptions[show_widget]">
                    <?php foreach (array('Hide widget', 'Visible only on PC', 'Visible only on PC & Tabled', 'Always visible') as $v) { ?>            
                        <option value="<?php echo $v ?>" <?php echo @$options['show_widget'] == $v ? 'selected' : ''; ?> ><?php echo esc_html($v) ?></option>
                    <?php } ?>
                </select> 
            </td>
        </tr>
        <tr valign="top" data-type="default">
            <th scope="row"><label for="formID">Url image for tab</label></th>
            <td>
                <input name="inctchatWidgetOptions[widget_picture]" type="text" id="urlPic" value="<?php echo esc_html(@$options['widget_picture'] ? @$options['widget_picture'] : INCTCHATWIDGET_URL . 'public/assets/img/widgets/text/wtext-h.png'); ?>" class="regular-text">
                <br>Horizontal : <?php echo INCTCHATWIDGET_URL . 'public/assets/img/widgets/text/wtext-h.png'; ?>
                <br>Left : <?php echo INCTCHATWIDGET_URL . 'public/assets/img/widgets/text/wtext-vl.png'; ?>
                <br>Right : <?php echo INCTCHATWIDGET_URL . 'public/assets/img/widgets/text/wtext-vr.png'; ?>
                
                
            </td>
        </tr>
        <tr>
            <th scope="row">Position</th>
            <td>
                <fieldset><legend class="screen-reader-text"><span>Position</span></legend>
                    <?php
                    foreach (array("bottom-right" => "bottom-right", "top-right" => "top-right",
                "bottom-left" => "bottom-left",
                "top-left" => "top-left",
                "middle-left" => "middle-left",
                "middle-right" => "middle-right"
                    ) as $key => $value) {
                        ?>
                        <label title="<?php echo esc_html($value); ?>"><input type="radio" name="inctchatWidgetOptions[screenAlignment]" <?php echo esc_html(@$options["screenAlignment"] == $key ? "checked=checked" : ""); ?> value="<?php echo $key; ?>"> <span> <?php echo $value; ?></span></label><br>
                        <?php
                    }
                    ?>
                </fieldset>
            </td>
        </tr>                           

    <STYLE type="text/css">
        .widgetOptions.styleLb{
            width:500px;
        }

        .styleBrowser{
            display:inline-block;
            height: 58px;
            width: 96px;
            background:#666;
            margin:1px 12px 6px;
            border:2px solid transparent;

        }

        .styleBrowser:hover,
        .styleBrowser.selectedStyle{
            width: 96px;
            height: 58px;
            border: 2px solid #ffa500;

            -moz-box-shadow: 0 0 2px #ffa500;
        }

        .styleBrowser .styleBox{
            display:inline-block;
            height: 35px;
            width: 60px;
            background:#ddd;
            margin:9px 19px;
            border-top: 5px solid #F59202;

            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-radius:3px;
        }
        .styleBrowser .styleBox1{
            height: 30px;
            width: 50px;
            border: 5px solid #fff;
            background:#ddd;
        }

        .styleBrowser .styleBox2{
            height: 30px;
            width: 50px;
            border: 5px solid #000;
            background:#ddd;
        }

        .clearfix:after {
            content: " "; /* Older browser do not support empty content */
            visibility: hidden;
            display: block;
            height: 0;
            clear: both;
        }
    </STYLE>

    <tr valign="top" data-type="default">
        <th scope="row"><label for="feedbackColors">Color</label></th>
        <td><input name="inctchatWidgetOptions[buttonColor]" type="text" id="buttonColor" value="<?php echo esc_html(@$options['buttonColor']); ?>" class="jotform-color-field regular-text" style="width:70px"> </td>
    </tr>
</tbody>
</table>