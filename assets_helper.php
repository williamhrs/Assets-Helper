<?php

/*
 * Method to load css files into your project.
 * @author William Rufino
 * @version 1.3
 * @param array $css
 */
if (!function_exists('load_css')) {

    function load_css($css) {
        if (!is_array($css)) {
            $css = (array) $css;
        }

        $return = '';
        foreach ($css as $c) {
            $return .= '<link rel="stylesheet" href="' . site_url() . 'public/css/' . $c . '"/>' . "\n";
        }
        return $return;
    }

}
/*
 * Method to load javascript files into your project.
 * @author William Rufino
 * @version 1.2
 * @param array $js
 */
if (!function_exists('load_js')) {

    function load_js($js) {
        if (!is_array($js)) {
            $js = (array) $js;
        }

        $return = '';
        foreach ($js as $j) {
            $return .= '<script type="text/javascript" src="' . site_url() . 'public/js/' . $j . '"></script>' . "\n";
        }
        return $return;
    }

}

/*
 * Method to insert images into your project. 
 * @author William Rufino
 * @version 1.0
 * @param string $image - path to image
 */
if (!function_exists('load_img')) {

    function load_img($img){
        return base_url().'public/images/' . $img;
    }

}
