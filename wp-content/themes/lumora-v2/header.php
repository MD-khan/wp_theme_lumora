<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
     <!-- FAVICON AND TOUCH ICONS -->
     <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png" type="image/x-icon">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); // Important! WordPress enqueues styles & scripts here ?>
</head>
<body <?php #body_class(); ?>>

<!-- PRELOADER SPINNER -->
<div id="loading" class="loading--theme h-full w-full fixed z-[99999999] top-0 bg-[#f5f5f9]">
    <div id="loading-center"
        class="absolute h-[100px] w-[100px] left-2/4 top-2/4 -translate-x-2/4 -translate-y-2/4 animate-[loading-center-absolute_1s_infinite]">
        <span class="loader w-[100px] h-[100px] inline-block relative rounded-[50%] border-2 border-solid border-[transparent_#888] after:content-[''] after:absolute after:-translate-x-2/4 after:-translate-y-2/4 after:rounded-[50%] after:border-[50px] after:border-solid after:border-[transparent_rgba(30,30,30,0.15)] after:left-2/4 after:top-2/4"></span>
    </div>
</div>


 

<!-- PAGE WRAPPER -->
<div id="page" class="page font--jakarta">

    <!-- HEADER -->

    <header id="header" class="tra-menu navbar-light white-scroll w-full block pt-0">
        <?php  get_template_part('template-parts/header/header-top'); ?>
    </header>
    <!-- END HEADER -->
