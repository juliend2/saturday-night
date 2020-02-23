<?php
/**
 * Plugin Name: Saturday Night
 * Description: The WordPress plugin for party animals.
 * Author: Julien Desrosiers
 * License: WTFPL
 * Version: 1.0.0
 */


defined( 'ABSPATH' ) or die( 'I got your IP, and I just called the cops.' );


// Enqueue the stylesheet:
function jdsn_styles() {
    $dir = plugin_dir_url(__FILE__);
    wp_enqueue_style('saturday-night-style', $dir . '/styles.css', [], '0.1.0', 'all');
}
add_action('wp_enqueue_scripts', 'jdsn_styles');


function jdsn_rainbow($atts, $content=null) {
    return "<span class='jdsn-sc jdsn-rainbow'><span class='jdsn-rainbow-inner'>".$content."</span></span>";
}
add_shortcode( 'rainbow', 'jdsn_rainbow' );


function jdsn_boom($atts, $content=null) {
    return "<span class='jdsn-sc jdsn-boom'><span class='jdsn-boom-inner'>".$content."</span></span>";
}
add_shortcode( 'boom', 'jdsn_boom' );


function jdsn_party($atts, $content=null) {
    return "<span class='jdsn-sc jdsn-party'><span class='jdsn-party-inner'>".$content."</span></span>";
}
add_shortcode( 'party', 'jdsn_party' );

function jdsn_fire($atts, $content=null) {
    return "<span class='jdsn-sc jdsn-fire'><span class='jdsn-fire-inner'>".$content."</span></span>";
}
add_shortcode( 'fire', 'jdsn_fire' );

function jdsn_shit($atts, $content=null) {
    return "<span class='jdsn-sc jdsn-shit'><span class='jdsn-shit-inner'>".$content."</span></span>";
}
add_shortcode( 'shit', 'jdsn_shit' );
