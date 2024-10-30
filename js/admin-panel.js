function optionsPage(option) {

    var option;

    location.href = 'admin.php?page=' + option;

}


/*

 Currently breaking WP Add Media
 jQuery(document).ready(function() {

 //JS for logo upload
 jQuery('#upload_image_button').click(function() {
 formfield = jQuery('#upload_image').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
 });

 window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#upload_image').val(imgurl);
 tb_remove();
 }

 //JS for favicon upload

 jQuery('#upload_favicon_button').click(function() {
 formfield = jQuery('#favicon_image').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
 });

 window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#upload_favicon').val(imgurl);
 tb_remove();
 }


 });

 */


function clearCustomLogo() {

    jQuery('#upload_image').val("");
    jQuery('#custom-logo-preview').hide();

}