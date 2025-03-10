<?php
/**
 * Custom Nav Walker for WordPress Menus
 *
 * @package Lumora
 */

class Lumora_Custom_Navwalker extends Walker_Nav_Menu {

    function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="sub-menu">';
    }

    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $class_names = ' class="menu-item-' . $item->ID . '"';
        $output .= '<li' . $class_names . '>';
        $output .= '<a href="' . $item->url . '" class="h-link">' . $item->title . '</a>';
    }

    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }

    function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
}
