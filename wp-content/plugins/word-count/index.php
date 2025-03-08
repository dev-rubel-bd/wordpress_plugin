<?php
/**
 * Plugin Name: Count Words.
 * Plugin URI: https://yourwebsite.com/
 * Description: Count word from any wordpress post.
 * Version: 1.0.0
 * Author: Rubel
 * Author URI: No Webside
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: word-count
 * Domain Path: /languages
 */

function wordcount_load_textdomain(){
    load_plugin_textdomain('word-count',false,dirname(__FILE__)."/languages");

}

add_action("plugins_loaded",'wordcount_load_textdomain');

function wordcount_count_words($content){

    $stipt_content=strip_tags($content);
    $word_count=str_word_count( $stipt_content);
    $lebel=__('Total number count ', 'word-count');
    $lebel=apply_filters("wordcount_heading", $lebel);     // For users editing
    $tag=apply_filters("wordcount_tag",'h2');             // For users editing
    $content.=sprintf('<%s>%s:%s</%s>',$tag,$lebel,$word_count,$tag);
    return $content;

}
add_filter('the_content','wordcount_count_words');


function wordcount_reading_time($content){

    $stipt_content=strip_tags($content);
    $word_count=str_word_count( $stipt_content);
   $reading_per_minute=floor($word_count/200);
   $reading_per_secound=floor($word_count %200 /(200/60));
   $its_visiable=apply_filters('wordcount_display_readingtime',1);
   if($its_visiable){
    $lebel=__( 'Total Reading Time','word-count');
    $lebel=apply_filters('wordcount_readingtime_heading',$lebel);   // For users editing
    $tag=apply_filters('wordcount_readingtime_tag','h4');           // For users editing
    $content.=sprintf('<%s>%s:%s minute %s Secounds</%s>',$tag, $lebel,$reading_per_minute,$reading_per_secound,$tag);

   }
   return $content;

}
add_filter('the_content','wordcount_reading_time');