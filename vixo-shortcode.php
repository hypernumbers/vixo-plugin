<?php

// define the plugin URL
define('VIXO_PLUGIN_URL', plugin_dir_url(__FILE__));

// add the shortcode handler to available shortcodes
add_shortcode('vixo', array('vixo_shortcode', 'shortcode'));

// this is the callback class that will be used on rendering the page
class vixo_shortcode {
      function shortcode($atts, $content=null) {
      	       // extract(shortcode_atts(array('url' => ''), $atts));
      	       extract(shortcode_atts(array('url' => '', 'width' => '', 'height' => ''), $atts));
	       if (empty($url)) return '<!--No Vixo Url -->';

	       $h = "";
	       $w = "";
	       $resizeFlag = "";

	       if (!empty($height)) {
	         $h = "height:$height;";
                 $resizeFlag = "hn_dont_resize";
	       }

	       if (!empty($width)) {
	         $w = "width:$width;";
		 $resizeFlag = "hn_dont_resize";
	       }

	       // concatenate the strings
	       $style = "border:0;display:none;" . $h . $w;

	       // add the custom javascript and css
	       vixo_load_css_and_javascript();

	       // now return the html
         $wpurl = get_site_url();
	       $page = utf8_uri_encode(get_permalink());
	       $name = uniqid();
	       return "<iframe id='$name' class='hn_wordpress $resizeFlag' style='$style' src='$url?embeddedin=$wpurl#wordpress!$page!$name'></iframe>";
	       }
}

// we need to load customer js and css - this function will be called to do it
// when the shortcode is rendered
function vixo_load_css_and_javascript() {

 	 # CSS first
	 wp_register_style('vixo.wordpress.css', VIXO_PLUGIN_URL . 'vixo.wordpress.css');
	 wp_enqueue_style('vixo.wordpress.css');

	 # Now JS
	 wp_enqueue_script('jquery');
	 wp_register_script('vixo.wordpress.js', VIXO_PLUGIN_URL . 'vixo.wordpress.js', false, "", true);
	 wp_enqueue_script('vixo.wordpress.js');
	 wp_register_script('jquery.ba-postmessage.js', VIXO_PLUGIN_URL . 'jquery.ba-postmessage.js', false, "", true);
	 wp_enqueue_script('jquery.ba-postmessage.js');
}

?>