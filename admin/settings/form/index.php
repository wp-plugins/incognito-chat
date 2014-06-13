<h3>Form params</h3>
<table class="form-table">
    <tbody> 
        <tr valign="top">
            <th scope="row"><label for="formID">Widget style</label></th>
            <td>
                <select id="typeWidget" onchange="formOptionsVisbleRouter()" name="inctchatWidgetOptions[style]">
                    <?php foreach (array('picture','default') as $v) { ?>            
                        <option value="<?php echo $v ?>" <?php echo @$options['style'] == $v ? 'selected' : ''; ?> ><?php echo esc_html($v) ?></option>
                    <?php } ?>
                </select>                 
            </td>
        </tr>
    </tbody>
</table>
<?php 
include INCTCHATWIDGET_DIR . "admin/settings/form/list-pictures.php"; 
?>