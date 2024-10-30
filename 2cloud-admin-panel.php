<?php
/*
Plugin Name: Custom Admin Panel by 2Cloud
Plugin URI: http://www.2cloud.ie
Description: Add a custom admin panel with widget to your theme. Add your own logo, favicon, social media links, custom CSS and custom JS.
Version: 1.1
Author: 2Cloud
Author URI: http://www.2cloud.ie
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/


function checkSocialTarget()
{
    if (get_option('custom-new-window') == true) {
        return "target='_blank'";
    }

}

function showSocialIcons()
{


    if (get_option('custom-facebook', false)) {
        $social_icons = "<a href='" . get_option('custom-facebook') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/fb.png', __FILE__) . "' alt='FB Page' />";

    }
    if (get_option('custom-twitter', false)) {
        $social_icons .= "<a href='" . get_option('custom-twitter') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/twitter.png', __FILE__) . "' alt='Twitter Profile' />";
    }
    if (get_option('custom-gplus', false)) {
        $social_icons .= "<a href='" . get_option('custom-gplus') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/google+.png', __FILE__) . "' alt='Google+ Page' />";
    }
    if (get_option('custom-linkedin', false)) {
        $social_icons .= "<a href='" . get_option('custom-linkedin') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/linkedin.png', __FILE__) . "' alt='LinkedIn Profile' />";
    }
    if (get_option('custom-pinterest', false)) {
        $social_icons .= "<a href='" . get_option('custom-pinterest') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/pinterest.png', __FILE__) . "' alt='pinterest Page' />";

    }

    if (get_option('custom-android', false)) {
        $social_icons .= "<a href='" . get_option('custom-android') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/android.png', __FILE__) . "' alt='Android App on the Play Store' />";

    }

    if (get_option('custom-appstore', false)) {
        $social_icons .= "<a href='" . get_option('custom-appstore') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/appstore.png', __FILE__) . "' alt='iPhone App on the App Store' />";

    }

    if (get_option('custom-rss', false)) {
        $social_icons .= "<a href='" . get_option('custom-rss') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/rss.png', __FILE__) . "' alt='RSS Feed' />";

    }

    if (get_option('custom-tumblr', false)) {
        $social_icons .= "<a href='" . get_option('custom-tumblr') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/tumblr.png', __FILE__) . "' alt='Tumblr Blog' />";

    }

    if (get_option('custom-yt', false)) {
        $social_icons .= "<a href='" . get_option('custom-yt') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/youtube.png', __FILE__) . "' alt='YouTube Channel' />";

    }

    if (get_option('custom-vimeo', false)) {
        $social_icons .= "<a href='" . get_option('custom-vimeo') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/vimeo.png', __FILE__) . "' alt='Vimeo Channel' />";

    }

    if (get_option('custom-instagram', false)) {
        $social_icons .= "<a href='" . get_option('custom-instagram') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/instagram.png', __FILE__) . "' alt='Instagram Profile' />";

    }


    return $social_icons;


}

//Register our shortcode

function custom_admin_shortcode($atts)
{
    $a = shortcode_atts(array(
        'show' => 'empty',
    ), $atts);

    //return "foo = {$a['foo']}";

    switch ($a['show']) {

        //Individual Social Icons
        case "fb":
            return "<a href='" . get_option('custom-facebook') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/fb.png', __FILE__) . "' alt='FB Page' />";
            break;

        case "twitter":
            return "<a href='" . get_option('custom-twitter') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/twitter.png', __FILE__) . "' alt='Twitter Profile' />";
            break;

        case "linkedin":
            return "<a href='" . get_option('custom-linkedin') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/linkedin.png', __FILE__) . "' alt='LinkedIn Profile' />";
            break;

        case "gplus":
            return "<a href='" . get_option('custom-gplus') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/google+.png', __FILE__) . "' alt='Google+ Page' />";
            break;

        case "pinterest":
            return "<a href='" . get_option('custom-pinterest') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/pinterest.png', __FILE__) . "' alt='pinterest Page' />";
            break;

        case "android":
            return "<a href='" . get_option('custom-android') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/android.png', __FILE__) . "' alt='Android App on the Play Store' />";
            break;

        case "appstore":
            return "<a href='" . get_option('custom-appstore') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/appstore.png', __FILE__) . "' alt='iPhone App on the App Store' />";
            break;

        case "rss":
            return "<a href='" . get_option('custom-rss') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/rss.png', __FILE__) . "' alt='RSS Feed' />";
            break;

        case "tumblr":
            return "<a href='" . get_option('custom-tumblr') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/tumblr.png', __FILE__) . "' alt='Tumblr Blog' />";
            break;

        case "yt":
            return "<a href='" . get_option('custom-yt') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/youtube.png', __FILE__) . "' alt='YouTube Channel' />";
            break;

        case "vimeo":
            return "<a href='" . get_option('custom-vimeo') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/vimeo.png', __FILE__) . "' alt='Vimeo Channel' />";
            break;

        case "instagram":
            return "<a href='" . get_option('custom-instagram') . "' " . checkSocialTarget() . "><img src='" . plugins_url('images/social/instagram.png', __FILE__) . "' alt='Instagram Profile' />";
            break;

        //End Individual Social Icons

        //Display All Icons Together

        case "social-icons":
            return "<div class='custom-social-icons'>" . showSocialIcons() . "</div>";
            break;

        //Display Custom Logo

        case "logo":
            return "<img src='" . get_option('custom-logo') . "' alt='" . get_bloginfo('title') . "' />";
            break;

        case "favicon":
            return "<link rel=\"shortcut icon\" href='" . get_option('custom-favicon') . "' type=\"image/x-icon\">";
            break;

        default:
            return "Invalid Shortcode";


    }


}

add_shortcode('custom-admin', 'custom_admin_shortcode');


// Hook for adding admin menus
add_action('admin_menu', 'cloud_add_pages');
// action function for above hook
function cloud_add_pages()
{
    // Add a new top-level menu
    add_menu_page(__('Admin Panel', 'menu-test'), __('Admin Panel', 'menu-test'), 'manage_options', 'cloud-top-level-handle', 'cloud_toplevel_page');
    // Add a submenu
    add_submenu_page('cloud-top-level-handle', __('Logo &amp; Branding', 'menu-test'), __('Logo &amp; Branding', 'menu-test'), 'manage_options', 'logo-options', 'cloud_sublevel_page');
    // Add a second submenu
    add_submenu_page('cloud-top-level-handle', __('Social Media', 'menu-test'), __('Social Media', 'menu-test'), 'manage_options', 'social-options', 'cloud_sublevel_page2');
    // Add a third submenu
    add_submenu_page('cloud-top-level-handle', __('Custom CSS &amp; JS', 'menu-test'), __('Custom CSS &amp; JS', 'menu-test'), 'manage_options', 'custom-options', 'cloud_sublevel_page3');
}

/*
Add Custom JS & CSS for admin panel
*/
function my_admin_scripts()
{
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script('admin-panel-js', plugins_url('js/admin-panel.js', __FILE__), array('jquery', 'media-upload', 'thickbox'));
    wp_enqueue_script('admin-panel-js');
}


function my_admin_styles()
{
    wp_enqueue_style('thickbox');
    wp_enqueue_style('admin-panel-css', plugins_url('css/admin-panel.css', __FILE__));
}

add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');
//Add custom JS for frontend if enabled (see custom.php)
function load_front_end_js()
{
    // Register the script like this for a plugin:
    wp_register_script('custom-js', plugins_url('/custom.php?js', __FILE__));
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script('custom-js');
}

add_action('wp_enqueue_scripts', 'load_front_end_js');
//Register settings
add_action('admin_init', 'register_mysettings');
function register_mysettings()
{
    //register our settings
    register_setting('custom-admin-logo', 'custom-logo');
    register_setting('custom-admin-logo', 'custom-favicon');
    register_setting('custom-admin-social', 'custom-facebook');
    register_setting('custom-admin-social', 'custom-twitter');
    register_setting('custom-admin-social', 'custom-linkedin');
    register_setting('custom-admin-social', 'custom-gplus');
    register_setting('custom-admin-social', 'custom-pinterest');
    register_setting('custom-admin-social', 'custom-android');
    register_setting('custom-admin-social', 'custom-appstore');
    register_setting('custom-admin-social', 'custom-rss');
    register_setting('custom-admin-social', 'custom-tumblr');
    register_setting('custom-admin-social', 'custom-yt');
    register_setting('custom-admin-social', 'custom-vimeo');
    register_setting('custom-admin-social', 'custom-instagram');
    register_setting('custom-admin-social', 'custom-new-window');
    register_setting('custom-admin-custom', 'custom-css');
    register_setting('custom-admin-custom', 'custom-js');
    register_setting('custom-admin-custom', 'custom-enable-js');
    register_setting('custom-admin-custom', 'custom-enable-css');
}

//Load custom JS in the footer if user has option enabled
function load_custom_js()
{
    $custom_js_enable = get_option('custom-enable-js');

    if ($custom_js_enable == true) {
        echo get_option('custom-js');
    }

}

add_action('wp_footer', 'load_custom_js');
//Load custom CSS in the header if user has option enabled.
function load_custom_css()
{
    $custom_css_enable = get_option('custom-enable-css');

    if ($custom_css_enable == true) {
        echo get_option('custom-css');
    }

}

add_action('wp_head', 'load_custom_css');
// Main
function cloud_toplevel_page()
{
    include("inc/admin-panel-home.php");
}

// Level 1
function cloud_sublevel_page()
{
    include("inc/admin-panel-logo.php");
}

// Level 2
function cloud_sublevel_page2()
{
    include("inc/admin-panel-social.php");
}

//Level 3
function cloud_sublevel_page3()
{
    include("inc/admin-panel-custom.php");
}


//Include Widget

include("inc/social-media-widget.php");


?>