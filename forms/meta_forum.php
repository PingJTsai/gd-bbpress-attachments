<input type="hidden" name="gdbbatt_forum_meta" value="edit" />
<p>
    <strong class="label" style="width: 160px;"><?php _e("Disable Attachments", "gd-bbpress-attachments"); ?>:</strong>
    <label for="gdbbatt_disable" class="screen-reader-text"><?php _e("Disable Attachments", "gd-bbpress-attachments"); ?>:</label>
    <input type="checkbox" <?php if ($meta["disable"] == 1) echo " checked"; ?> name="gdbbatt[disable]" id="gdbbatt_disable" />
</p>
<p>
    <strong class="label" style="width: 160px;"><?php _e("Override Defaults", "gd-bbpress-attachments"); ?>:</strong>
    <label for="gdbbatt_to_override" class="screen-reader-text"><?php _e("Override Defaults", "gd-bbpress-attachments"); ?>:</label>
    <input type="checkbox" <?php if ($meta["to_override"] == 1) echo " checked"; ?> name="gdbbatt[to_override]" id="gdbbatt_to_override" />
</p>
<hr style="border-color: #CCCCCC #FFFFFF #FFFFFF #CCCCCC; border-style: solid; border-width: 1px;"/>
<p>
    <strong class="label" style="width: 160px;"><?php _e("Maximum file size", "gd-bbpress-attachments"); ?>:</strong>
    <label for="gdbbatt_max_file_size" class="screen-reader-text"><?php _e("Maximum file size", "gd-bbpress-attachments"); ?>:</label>
    <input type="text" class="small-text" value="<?php echo $meta["max_file_size"]; ?>" name="gdbbatt[max_file_size]" id="gdbbatt_max_file_size" />
    <span class="description">KB</span>
</p>
<p>
    <strong class="label" style="width: 160px;"><?php _e("Maximum files to upload", "gd-bbpress-attachments"); ?>:</strong>
    <label for="gdbbatt_max_to_upload" class="screen-reader-text"><?php _e("Maximum files to upload", "gd-bbpress-attachments"); ?>:</label>
    <input type="text" class="small-text" value="<?php echo $meta["max_to_upload"]; ?>" name="gdbbatt[max_to_upload]" id="gdbbatt_max_to_upload" />
</p>
