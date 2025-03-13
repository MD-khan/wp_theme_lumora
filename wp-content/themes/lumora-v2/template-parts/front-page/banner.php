<?php
/**
 * Banner Section Template
 * @package Lumora
 */
?>
 <!-- BANNER-3 ============================================= -->
<section id="banner-3" class="pt--100 pt-[100px] lg:pt-[80px] md:pt-[70px] banner-section">
    <div class="container">
        <!-- BANNER-3 WRAPPER -->
        <div class="banner-3-wrapper bg--03 bg--scroll rounded-[16px] relative overflow-hidden text-center bg-no-repeat bg-[center_center] bg-cover !bg-fixed"
            style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-03.jpg');">
            <div class="banner-overlay pt-[75px] pb-[85px] px-[20%] md:pt-[45px] md:pb-[55px] md:px-[20%] lg:pt-[60px] lg:pb-[70px] lg:px-[22%] sm:pt-[55px] sm:pb-[65px] sm:px-[60px] xsm:pt-[60px] xsm:pb-[70px] xsm:px-[30px] w-full h-full">
                <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
                    <!-- BANNER-3 TEXT -->
                    <div class="col flex-[1_0_0%] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                        <div class="banner-3-txt color--white">
                            <!-- Title -->
                            <h2 class="s-48 w-700 text-[3rem] lg:text-[2.75rem] md:text-[2.5rem] sm:text-[2.25rem] xsm:text-[1.9375rem] font-bold leading-[1.25] font-Jakarta sm:leading-[1.35] xsm:leading-[1.35]">
                                <?php echo get_theme_mod('banner_title', 'Starting with Martex is easy, fast and free'); ?>
                            </h2>
                            <!-- Text -->
                            <p class="p-xl mt-[20px] lg:mt-[15px] md:mt-[10px] sm:mt-3 xsm:mt-3 xsm:text-[1.125rem] mb-[25px] lg:mb-[25px] md:mb-[20px] sm:mb-[20px] xsm:mb-[20px]">
                                <?php echo get_theme_mod('banner_subtext', 'It only takes a few clicks to get started'); ?>
                            </p>
                            <!-- Button -->
                            <a href="<?php echo get_theme_mod('banner_button_link', '#'); ?>" class="btn !rounded-[4px] btn--theme hover--tra-white" data-bs-toggle="modal" data-bs-target="#modal-3">
                                <?php echo get_theme_mod('banner_button_text', "Get started - it's free"); ?>
                            </a>
                            <!-- Button Text -->
                            <p class="p-sm btn-txt ico-15 !m-[20px_0_0_0] lg:mt-[15px] lg:mb-0 lg:mx-0 md:mt-[13px] md:mb-0 md:mx-0 xsm:mt-[18px] xsm:mb-0 sm:mt-[15px] sm:mb-0 sm:mx-0">
                                <span class="flaticon-check relative right-[2px] top-[0.5px]"></span> Free for 14 days, no credit card required.
                            </p>
                        </div>
                    </div>
                    <!-- END BANNER-3 TEXT -->
                </div>
                <!-- End row -->
            </div>
            <!-- End banner overlay -->
        </div>
        <!-- END BANNER-3 WRAPPER -->
    </div>
    <!-- End container -->
</section>
<!-- END BANNER-3 -->