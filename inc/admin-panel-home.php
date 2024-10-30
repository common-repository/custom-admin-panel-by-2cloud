<div class="wrap">
    <h2>Admin Panel</h2>
    <?php include("admin-panel-top-menu.php"); ?>
    <div class="instructions">
        <h3>Instructions</h3>

        <p>Thanks for installing 2Cloud's Custom Admin Panel! Here are a few tips to
            getting started using this plugin.</p>

        <p><strong>Logo &amp; Branding <br></strong>You can upload your custom logo and
            favicon for your site from this section, and then use them on your site by
            using either the shortcode below (for use in pages &amp; posts) or the PHP code
            for use in your theme.</p>

        <p><strong>Social Network Options &amp; Social Icon Widget</strong><br>This
            section allows you enter the URL of your favourite social networks, and then
            by using the shortcodes below you can display them across your entire
            website. You can display individual icons or all of them together.<br>We
            also have included a <a href="widgets.php">widget</a> for your social icons
            so that they can be displayed in any widgetized area of your website.</p>

        <p><strong>Custom CSS &amp; JS Options</strong><br>Sometimes you need to make
            alterations to your site, so instead of getting down and deep with your
            themes files we have added a section where you can add custom CSS or custom
            JavaScript directly into your site without having to touch your themes
            files.</p>
    </div>

    <div class="shortcodes">
        <h3>Shortcodes</h3>
        <table style="width: 100%">
            <tr>
                <td style="width: 20%"><strong>Display Custom Logo</strong></td>
                <td style="width: 40%">[custom-admin show="logo"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='logo']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Display Favicon</strong></td>
                <td style="width: 40%">[custom-admin show="favicon"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='favicon']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show All Social Media Icons</strong></td>
                <td style="width: 40%">[custom-admin show="social-icons"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='social-icons']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Facebook Icon</strong></td>
                <td style="width: 40%">[custom-admin show="fb"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='fb']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Twitter Icon</strong></td>
                <td style="width: 40%">[custom-admin show="twitter"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='twitter']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show LinkedIn Icon</strong></td>
                <td style="width: 40%">[custom-admin show="linkedin"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='linkedin']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Google+ Icon</strong></td>
                <td style="width: 40%">[custom-admin show="gplus"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='gplus']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Pinterest icon</strong></td>
                <td style="width: 40%">[custom-admin show="pinterest"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='pinterest']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Android Icon</strong></td>
                <td style="width: 40%">[custom-admin show="android"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='android']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show App Store Icon</strong></td>
                <td style="width: 40%">[custom-admin show="appstore"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='appstore']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show RSS Feed Icon</strong></td>
                <td style="width: 40%">[custom-admin show="rss"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='rss']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Tumblr Icon</strong></td>
                <td style="width: 40%">[custom-admin show="tumblr"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='tumblr']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show YouTube Icon</strong></td>
                <td style="width: 40%">[custom-admin show="yt"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='yt']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Vimeo Icon</strong></td>
                <td style="width: 40%">[custom-admin show="vimeo"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='vimeo']");?&gt;</td>
            </tr>
            <tr>
                <td style="width: 20%"><strong>Show Instagram Icon</strong></td>
                <td style="width: 40%">[custom-admin show="instagram"]</td>
                <td>&lt;?php echo do_shortcode("[custom-admin show='instagram']");?&gt;</td>
            </tr>
        </table>


        <div class="admin-panel-credits">
            <h3>Credits</h3>

            <p>Designed and built by <a href="http://www.2cloud.ie" target="_blank">
                    2Cloud</a></p>

            <p>Social Icons by
                <a href="http://martz90.deviantart.com/art/Circle-Icons-Pack-371172325" target="_blank">
                    Martz90</a></p>

            <p>Feature requests
                <a href="http://www.2cloud.ie/plugins/wp-custom-admin-panel/#comments" target="_blank">
                    here</a> via the comments section. </p>

            <p>

            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="brendan@2cloud.ie">
                <input type="hidden" name="lc" value="IE">
                <input type="hidden" name="item_name" value="2Cloud">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"
                       name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
            </p>
        </div>
    </div>
</div>

