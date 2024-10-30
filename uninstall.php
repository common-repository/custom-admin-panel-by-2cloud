<?php
/*
uninstall.php

Removes all the custom options we created with the plugin. This helps keep the users DB nice and clean - as it should be.

*/


//if uninstall not called from WordPress exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit();

}


delete_option('custom-logo');
delete_option('custom-favicon');
delete_option('custom-facebook');
delete_option('custom-twitter');
delete_option('custom-linkedin');
delete_option('custom-gplus');
delete_option('custom-pinterest');
delete_option('custom-android');
delete_option('custom-appstore');
delete_option('custom-rss');
delete_option('custom-tumblr');
delete_option('custom-yt');
delete_option('custom-vimeo');
delete_option('custom-instagram');
delete_option('custom-css');
delete_option('custom-js');
delete_option('custom-enable-js');
delete_option('custom-enable-css');

?>