<?php
/**
 * Plugin Name: Add Extra Text.
 * Plugin URI: https://yourwebsite.com/
 * Description: Add extra text in a title and display it .
 * Version: 1.0.0
 * Author: Rubel
 * Author URI: No Webside
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: add-extra-text
 * Domain Path: /languages
 */


function the_extra_text_to_content($content){
    $extra_text="<p style='color: green;'>Added Extra text using filter hooks</p>";
    return $content.$extra_text;
}
add_action('the_content','the_extra_text_to_content');

 ?>