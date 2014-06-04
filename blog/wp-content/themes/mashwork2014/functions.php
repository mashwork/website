<?php
/**
 * @package Mashwork
 * @subpackage Mashwork2014
 */
add_theme_support( 'post-thumbnails' );

function filter_ptags_on_images($content){
    return preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '\1', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


/**
 * Attach a class to linked images' parent anchors
 * e.g. a img => a.img img
 */
function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
   $classes = 'img'; // separated by spaces, e.g. 'img image-link'

   // check if there are already classes assigned to the anchor
   if ( preg_match('/<a.*? class=".*?">/', $html) ) {
      $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);
   } else {
      $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);
   }
   return $html;
}
add_filter('image_send_to_editor','give_linked_images_class',10,8);

?>