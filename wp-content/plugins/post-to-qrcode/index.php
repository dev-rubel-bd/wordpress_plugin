<?php
/**
 * Plugin Name: Post to QR Code.
 * Plugin URI: https://yourwebsite.com/
 * Description: Disply QR code under every post.
 * Version: 1.0.0
 * Author: Rubel
 * Author URI: No Webside
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: post-to-qrcode
 * Domain Path: /languages
 */

function wordcount_load_textdomain(){
    load_plugin_textdomain('post-to-qrcode',false,dirname(__FILE__)."/languages");

}

add_action("plugins_loaded",'wordcount_load_textdomain');



function ptqrc_display_qr_code($content){
    $current_post_id=get_the_ID();
    $current_post_title=get_the_title($current_post_id);
    $current_post_url=urlencode(get_the_permalink($current_post_id));
    /* 
    *post types cheak
    */
    $current_post_type=get_post_type($current_post_id);
    $excluded_post_types=apply_filters('ptqrc_excluded_post_types',array());
    if(in_array($current_post_type,$excluded_post_types)){
        return $content;
    }
    $img_src= sprintf('https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=https://www.facebook.com/=%s',$current_post_url);
    $content.=sprintf("<div class='qrcode'><img src='%s' alt='%s'/> </div>",$img_src,$current_post_title);
    return $content;

}
add_filter('the_content', 'ptqrc_display_qr_code');     

