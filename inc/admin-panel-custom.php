<div class="wrap">
    <h2>Custom CSS &amp; JavaScript</h2>
    <?php include("admin-panel-top-menu.php"); ?>
    <div class="admin-panel-instructions">
        <h3>How to Use</h3>

        <p>To use custom CSS and JavaScript on your site enter your custom code below.
            Make sure to use opening and closing tags such as &lt;script&gt;&lt;/script&gt; and
            &lt;style&gt;&lt;/style&gt;.</p>
    </div>


    <form class="form" method="post" action="options.php">
        <?php settings_fields('custom-admin-custom'); ?>
        <?php do_settings_sections('custom-admin-custom'); ?>

        <table style="width: 100%">
            <tr>
                <td style="width: 20%" valign="top">Custom CSS</td>
                <td>
                    <textarea name="custom-css"
                              style="width: 600px; height: 250px"><?php echo get_option('custom-css'); ?></textarea>&nbsp;
                </td>
            </tr>
            <tr>
                <td style="width: 20%" valign="top">Enable Custom CSS</td>
                <td>
                    <?php
                    $css_checked = get_option('custom-enable-css');
                    if ($css_checked == true) {
                        $css_checked = "checked=\"checked\"";
                    } else {
                        $css_checked = "";
                    }
                    ?>
                    <input <?php echo $css_checked; ?> name="custom-enable-css" type="checkbox" value="true">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 20%" valign="top">Custom JavaScript</td>
                <td>
                    <textarea cols="20" name="custom-js" rows="1"
                              style="width: 600px; height: 250px"><?php echo get_option('custom-js'); ?></textarea></td>
            </tr>
            <tr>
                <td style="width: 20%" valign="top">Enable Custom JS</td>
                <td>
                    <?php
                    $js_checked = get_option('custom-enable-js');
                    if ($js_checked == true) {
                        $js_checked = "checked=\"checked\"";
                    } else {
                        $js_checked = "";
                    }
                    ?>
                    <input <?php echo $js_checked; ?> name="custom-enable-js" type="checkbox" value="true">&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 20%" valign="top">&nbsp;</td>
                <td>
                    <button class="button-primary" type="submit">Save Options</button>
                </td>
            </tr>
        </table>
    </form>

</div>



