<div class="wrap">
    <h2>Social Icons</h2>
    <?php include("admin-panel-top-menu.php"); ?>
    <div class="instructions">
        <h3>How to Use</h3>

        <p>Just enter the full URL of your social network page beside each network you
            want to use. Anything left blank will not be displayed on your website.</p>

        <p>Want to use your own social icons? Just copy your icons in to the plugin folder
            <strong>/wp-content/plugins/custom-admin-panel-by-2cloud/images/social/></strong> but make sure that your
            new images
            have the same filename and extensions as the existing ones. Example if you are
            replacing the Facebook icon make sure you replace it with an icon called
            fb.png.</p>
    </div>

    <div class="profiles">
        <form class="form" method="post" action="options.php">
            <?php settings_fields('custom-admin-social'); ?>
            <?php do_settings_sections('custom-admin-social'); ?>

            <table style="width: 100%">
                <tr>
                    <td style="width: 20%">Facebook Page</td>
                    <td>
                        <input name="custom-facebook" size="40" type="text"
                               placeholder="https://www.facebook.com/2cloud"
                               value="<?php echo get_option('custom-facebook'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Twitter Profile</td>
                    <td><input name="custom-twitter" size="40" type="text" placeholder="https://www.twitter.com/2cloud"
                               value="<?php echo get_option('custom-twitter'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">LinkedIn Profile</td>
                    <td><input name="custom-linkedin" size="40" type="text"
                               placeholder="https://www.linkedin.com/2cloud"
                               value="<?php echo get_option('custom-linkedin'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Google+ Page</td>
                    <td><input name="custom-gplus" size="40" type="text" placeholder="https://plus.google.com/123456789"
                               value="<?php echo get_option('custom-gplus'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Pinterest Board</td>
                    <td><input name="custom-pinterest" size="40" type="text"
                               placeholder="https://www.pinterest.com/2cloud"
                               value="<?php echo get_option('custom-pinterest'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Andoid Play Store</td>
                    <td><input name="custom-android" size="40" type="text"
                               placeholder="https://play.google.com/store/apps/details?id=com.app"
                               value="<?php echo get_option('custom-android'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Apple App Store</td>
                    <td><input name="custom-appstore" size="40" type="text"
                               placeholder="https://itunes.apple.com/ie/app/spotify-music/id324684580"
                               value="<?php echo get_option('custom-appstore'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">RSS Feed</td>
                    <td><input name="custom-rss" size="40" type="text" placeholder="<?php bloginfo('rss2_url'); ?>"
                               value="<?php echo get_option('custom-rss'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Tumblr Blog</td>
                    <td><input name="custom-tumblr" size="40" type="text" placeholder="http://www.tumblr.com/myblog"
                               value="<?php echo get_option('custom-tumblr'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">YouTube Channel</td>
                    <td><input name="custom-yt" size="40" type="text" placeholder="https://www.youtube.com/user/Google"
                               value="<?php echo get_option('custom-yt'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Vimeo Channel</td>
                    <td><input name="custom-vimeo" size="40" type="text"
                               placeholder="http://www.vimeo.com/mychannelname"
                               value="<?php echo get_option('custom-vimeo'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">Instagram Profile</td>
                    <td><input name="custom-instagram" size="40" type="text" placeholder="http://instagram.com/google"
                               value="<?php echo get_option('custom-instagram'); ?>"></td>
                </tr>
                <tr>
                    <td style="width: 20%">&nbsp;</td>
                    <td>            &nbsp;</td>
                </tr>
                <tr>
                    <td style="width: 20%">Open links in new window?</td>
                    <td>
                        <?php
                        $checked = get_option('custom-new-window');
                        if ($checked == true) {
                            $checked = "checked=\"checked\"";
                        } else {
                            $checked = "";
                        }
                        ?>
                        <input <?php echo $checked; ?> name="custom-new-window" type="checkbox" value="true">&nbsp;</td>
                </tr>
                <tr>
                    <td style="width: 20%">&nbsp;</td>
                    <td>
                        <button class="button-primary" type="submit">Save Options</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

