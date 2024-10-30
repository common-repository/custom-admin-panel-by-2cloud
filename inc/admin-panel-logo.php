<div class="wrap">
    <h2>Logo &amp; Branding</h2>
    <?php include("admin-panel-top-menu.php"); ?>

    <div class="admin-panel-instructions">
        <h3>How to Use</h3>

        <p>You can upload your custom logo for your website here. See details
            <a href="javascript:optionsPage('cloud-top-level-handle');">here</a> on how to display it on your website.
        </p>
    </div>


    <form class="form" method="post" action="options.php">
        <?php settings_fields('custom-admin-logo'); ?>
        <?php do_settings_sections('custom-admin-logo'); ?>
        <table style="width: 100%" cellpadding="5">
            <tr>
                <td valign="top">Custom Logo</td>
                <td valign="top">
                    <input id="upload_image" name="custom-logo" size="36" type="text"
                           value="<?php echo get_option('custom-logo'); ?>"/>
                    <!--<input id="upload_image_button" class="button action" type="button" value="Upload" />-->
                    <br/>
			<span class="admin-panel-tip">Upload or enter a URL for your custom 
			logo</span>
                    <?php
                    $custom_logo = get_option('custom-logo');
                    if (!empty($custom_logo)) {
                        echo "<div id=\"custom-logo-preview\" class=\"admin-panel-custom-logo\"><img src=\"$custom_logo\" alt=\"custom-logo\" />
			<br /><button type=\"button\" class=\"button-secondary\" onclick=\"clearCustomLogo();\">Remove</button>
			</div>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td valign="top">Custom Favicon</td>
                <td valign="top">
                    <input id="upload_favicon" name="custom-favicon" size="36" type="text"
                           value="<?php echo get_option('custom-favicon'); ?>"/>
                    <!--<input id="upload_favicon_button" class="button action" type="button" value="Upload" />-->
                    <br/>
                    <span class="admin-panel-tip">Upload or enter a URL for your Favicon</span>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    &nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <button class="button-primary" type="submit">Save Options</button>
                </td>
            </tr>
        </table>

    </form>
</div>

