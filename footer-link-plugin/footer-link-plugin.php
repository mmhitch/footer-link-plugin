<?php
/*
Plugin Name: Footer Link Plugin
Plugin UTI: http://wewebbuild.com/footer-link-plugin
Description: Add a custom link to bottom of footer
Version: 1.0
Author: Mark Hitchcock
Licsnse: GPL2
*/

function add_footer_link()
{
   $footer_link = "<a href='#'>Link Here</a>";
   
   echo $footer_link;
}

add_action('wp_footer', 'add_footer_link');
?>