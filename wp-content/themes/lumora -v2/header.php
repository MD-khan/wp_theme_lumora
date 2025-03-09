<?php
/**
 * Header Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Preloader (Can be disabled from Customizer) -->
<?php if (get_theme_mod('enable_preloader', true)) : ?>
    <div id="loading" class="loading--theme h-full w-full fixed z-[99999999] top-0 bg-[#f5f5f9]">
        <div id="loading-center" class="absolute h-[100px] w-[100px] animate-[loading-center-absolute_1s_infinite] left-2/4 top-2/4">
            <span class="loader w-[100px] h-[100px] inline-block relative animate-[rotation_1s_linear_infinite] rounded-[50%] border-2 border-solid border-[transparent_#888]"></span>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part('template-parts/nav'); ?>
