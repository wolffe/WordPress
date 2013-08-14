<input type="hidden" value="1" name="thememakers_meta_saving" />
<table class="form-table">
    <tbody>
        <tr>
            <th style="width:25%">
                <label for="meta_title">
                    <strong><?php _e('Meta title', THEMEMAKERS_THEME_FOLDER_NAME); ?></strong>
                    <span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;"><?php _e('SEO title of page. Title – 50-80 characters (usually – 75)', THEMEMAKERS_THEME_FOLDER_NAME); ?></span>
                </label>
            </th>
            <td>
                <input type="text" style="width:95%; margin-right: 20px; float:left; height:20px;" id="meta_title" name="meta_title" value="<?php echo $meta_title; ?>">
            </td>
        </tr>
        <tr style="border-top:1px solid #eeeeee;">
            <th style="width:25%">
                <label for="meta_keywords">
                    <strong><?php _e('Meta keywords', THEMEMAKERS_THEME_FOLDER_NAME); ?></strong>
                    <span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;"><?php _e('Keywords - up to 250 characters', THEMEMAKERS_THEME_FOLDER_NAME); ?></span>
                </label>
            </th>
            <td>
                <textarea style="width:95%; margin-right: 20px; float:left; height:100px;" id="meta_keywords" name="meta_keywords"><?php echo $meta_keywords; ?></textarea>
            </td>
        </tr>
        <tr style="border-top:1px solid #eeeeee;">
            <th style="width:25%">
                <label for="meta_description">
                    <strong><?php _e('Meta description', THEMEMAKERS_THEME_FOLDER_NAME); ?></strong>
                    <span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;"><?php _e('Description – about 150-200 characters', THEMEMAKERS_THEME_FOLDER_NAME); ?></span>
                </label>
            </th>
            <td>
                <textarea style="width:95%; margin-right: 20px; float:left; height:100px;" id="meta_description" name="meta_description"><?php echo $meta_description; ?></textarea>
            </td>
        </tr>
    </tbody>
</table>