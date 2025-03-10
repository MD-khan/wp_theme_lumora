<?php
/**
 * Navigation Template
 * 
 * @package Lumora
 */
?>

<nav class="wsmenu clearfix">
    <div class="overlapblackbg"></div>
    <?php
    if (has_nav_menu('lumora-header-menu')) {
        wp_nav_menu([
            'theme_location' => 'lumora-header-menu',
            'container'      => false,
            'menu_class'     => 'wsmenu-list nav-theme',
            'fallback_cb'    => false,
        ]);
    } else {
        echo '<p style="color: red; text-align:center;">No menu assigned. Please set a menu in Appearance → Menus.</p>';
    }
    ?>
</nav>
