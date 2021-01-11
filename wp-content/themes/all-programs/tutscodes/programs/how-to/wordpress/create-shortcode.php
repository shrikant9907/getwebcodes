<?php 
/*
* Add shortcode for anchor link in WordPress  | Site - allprograms.tech
*/
// [AnchorLink href=’#test’ label=’Click Here’ class=’btn’]
add_shortcode('AnchorLink', 'addAnchorFunction');
function addAnchorFunction($atts){

   extract(shortcode_atts(array(
      'label' => 'Click Me',
      'classes' => 'anchor-link',
      'href' => '#'
   ), $atts));

   $anchor = "<a class='$classes' href='$href'>$label</a>";
 
   return $anchor;
}