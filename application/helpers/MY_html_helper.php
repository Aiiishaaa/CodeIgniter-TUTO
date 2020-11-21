<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('meta')) {
    function meta($name = '', $content = '', $type = 'name', $newline = "\n") {
        if (!is_array($name)) {
            $name = array (
                array (
                    'name' => $name ,
                    'content' => $content ,
                    'type' => $type ,
                    'newline' => $newline
                )
            );
        } elseif (isset($name['name'])) {
            $name = array($name);
        }
        $allowed_type = array ('charset','http-equiv','name','property');
        $str = '' ;
        foreach ($name as $meta) {
            $meta['type'] = isset ( $meta ['type']) ? (( $meta ['type'] ==='equiv') ? 'http-equiv': $meta ['type']) : '' ; // backward compatibility
            $type = in_array ($meta['type'], $allowed_type) ? $meta['type'] : 'name';
            $name = isset( $meta['name']) ? $meta['name'] : '';
            $content = isset( $meta['content']) ? $meta['content'] : '';
            $newline = isset( $meta['newline']) ? $meta['newline'] : "\n";
            $str .= '<meta '. $type .'="' . $name . (($type === 'charset') ? '' : '" content="' . $content) . '" />' . $newline;
        }
        return $str ;
    }
}