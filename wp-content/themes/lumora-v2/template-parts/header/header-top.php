<?php
/**
 * Header Top Section (Includes Logo & Navigation)
 *
 * @package Lumora
 */
?>

<div class="header-wrapper fixed z-[1030] top-0 inset-x-0">

    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <span class="smllogo">
            <a href="<?php echo home_url('/'); ?>">
                <img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pink.png" alt="<?php bloginfo('name'); ?>">
            </a>
        </span>
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    </div>

    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix text-[#b1b7cd] p-0 !bg-transparent shadow-none px-0 !py-[20px] w-full h-auto z-[1031]">
        <div class="wsmainwp clearfix">
            
            <!-- HEADER LOGO -->
            <div class="desktoplogo">
                <a href="<?php echo home_url('/'); ?>" class="logo-black">
                    <img class="light-theme-img w-auto max-w-[inherit] max-h-[38px] lg:max-h-[34px] inline-block"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pink.png" alt="<?php bloginfo('name'); ?>">
                    <img class="dark-theme-img w-auto max-w-[inherit] max-h-[38px] lg:max-h-[34px]"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blue-white.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>

            <!-- HEADER WHITE LOGO -->
            <div class="desktoplogo">
                <a href="<?php echo home_url('/'); ?>" class="logo-white">
                    <img class="w-auto max-w-[inherit] max-h-[38px] lg:max-h-[34px] inline-block"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>

            <!-- MAIN MENU -->
            <?php get_template_part('template-parts/header/nav'); ?>

        </div>
    </div>

</div>
