<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); // Important! WordPress enqueues styles & scripts here ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="page font--jakarta">

    <!-- HEADER -->
    <header id="header" class="tra-menu navbar-light white-scroll w-full block pt-0">
        <?php get_template_part('template-parts/header/header-top'); ?>
    </header>
    <!-- END HEADER -->
