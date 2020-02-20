<?php
/**
 * Plugin Name: Saturday Night
 * Description: The WordPress plugin for party animals.
 * Author: Julien Desrosiers
 * License: WTFPL
 */


defined( 'ABSPATH' ) or die( 'I got your IP, and I just called the cops.' );


// Enqueue the stylesheet:
function sn_styles() {
    $dir = plugin_dir_url(__FILE__);
    wp_enqueue_style('saturday-night-style', $dir . '/styles.css', [], '0.1.0', 'all');
}
add_action('wp_enqueue_scripts', 'sn_styles');


function sn_rainbow($atts, $content=null) {
    return "<span class='sn-sc sn-rainbow'><span class='sn-rainbow-inner'>".$content."</span></span>";
}
add_shortcode( 'rainbow', 'sn_rainbow' );


function sn_boom($atts, $content=null) {
    return "<span class='sn-sc sn-boom'><span class='sn-boom-inner'>".$content."</span></span>";
}
add_shortcode( 'boom', 'sn_boom' );


function sn_party($atts, $content=null) {
    return "<span class='sn-sc sn-party'><span class='sn-party-inner'>".$content."</span></span>";
}
add_shortcode( 'party', 'sn_party' );

function sn_shit($atts, $content=null) {
    return "<span class='sn-sc sn-shit'><span class='sn-shit-inner'>".$content."</span></span>";
}
add_shortcode( 'shit', 'sn_shit' );