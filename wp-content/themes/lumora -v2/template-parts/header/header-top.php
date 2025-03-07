<?php
/**
 * Header Top Section (Mobile Menu & Wrapper)
 * 
 * @package Lumora
 */
?>

<div class="header-wrapper fixed z-[1030] top-0 inset-x-0">

    <!-- MOBILE HEADER -->
    <div class="wsmobileheader clearfix">
        <span class="smllogo">
            <?php get_template_part('template-parts/header/branding'); ?>
        </span>
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    </div>

    <!-- NAVIGATION MENU -->
    <div class="wsmainfull menu clearfix text-[#b1b7cd] p-0 !bg-transparent shadow-none px-0 !py-[20px] w-full h-auto z-[1031]">
        <div class="wsmainwp clearfix">
            
            <!-- Branding -->
            <?php get_template_part('template-parts/header/branding'); ?>

            <!-- Navigation -->
            <?php get_template_part('template-parts/header/nav'); ?>

        </div>
    </div>

</div>
