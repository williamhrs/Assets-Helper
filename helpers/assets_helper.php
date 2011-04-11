<?php

/*
 * Method to load css files into your project.
 *
 * Accepts a string or array as parameter.
 *
 * Usage:
 *
 * echo load_css('screen.css');
 * echo load_css(array('screen.css','otherstyle.css'));
 * echo load_css(array(
 *			 array('screen.css', 'screen, projection'),
 *			 array('print.css', 'print'),
 *		 ));
 *
 * @author William Rufino <williamhrs@gmail.com>
 * @author Lucas Vasconcelos <lucas.vasconcelos@gmail.com>
 * @version 1.6
 * @param mixed $css
 */
if (!function_exists('load_css')) {

	function load_css($data) {
		$CI =& get_instance();
		$CI->load->helper('html');
                $CI->config->load('assets');
                if(!$CI->config->item('css_path')){
                    $CI->config->set_item('css_path','public/css/');
                }
		$csspath = base_url() . $CI->config->item('css_path');

		if (!is_array($data))
			return link_tag($csspath . $data, 'stylesheet', 'text/css');
		else {
			$return = '';
			foreach ($data as $item) {
				if (!is_array($item)) {
					$return .= link_tag($csspath . $item, 'stylesheet', 'text/css');
				} else {
					$return .= link_tag($csspath . $item[0], 'stylesheet', 'text/css', '', $item[1]);
				}
			}
		}
		return $return;
	}

}
/*
 * Method to load javascript files into your project.
 * @author William Rufino
 * @version 1.4
 * @param array $js
 */
if (!function_exists('load_js')) {

	function load_js($js) {
		$CI =& get_instance();
		$CI->load->helper('url');
		if (!is_array($js)) {
			$js = (array) $js;
		}
                $CI->config->load('assets');
                if(!$CI->config->item('js_path')){
                    $CI->config->set_item('js_path','public/js/');
                }
                $jspath =  base_url() . $CI->config->item('js_path');
		$return = '';
		foreach ($js as $j) {
			$return .= '<script type="text/javascript" src="' . $jspath . $j . '"></script>' . "\n";
		}
		return $return;
	}

}

/*
 * Method to insert images into your project.
 * @author William Rufino
 * @version 1.3
 * @param string $image - path to image
 */
if (!function_exists('load_img')) {

	function load_img($img){
		$CI =& get_instance();
		$CI->load->helper('url');
                $CI->config->load('assets');
                if(!$CI->config->item('image_path')){
                    $CI->config->set_item('image_path','public/image/');
                }
                $imagepath =  base_url() . $CI->config->item('image_path');
		return $imagepath . $img;
	}

}

