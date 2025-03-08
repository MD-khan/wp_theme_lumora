<?php
/**
 * Hero Section Template
 * 
 * @package Lumora
 */
?>

<section id="hero-1"
    class="bg--scroll hero-section relative md:mt-[80px] z-[3] w-full bg-no-repeat bg-[center_center] bg-cover bg-fixed sm:w-auto sm:bg-scroll xsm:w-auto xsm:bg-scroll"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-1.jpg');">
    
    <div class="container">
        <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)] items-center">
            
            <!-- HERO TEXT -->
            <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                <div class="hero-1-txt color--white wow fadeInRight sm:px-[3%] sm:py-0">
                    
                    <!-- Title -->
                    <h2 class="s-58 w-700 text-[3.625rem] font-bold leading-[1.25] font-Jakarta">
                        <?php echo get_theme_mod('hero_title', 'Content is the key to building an audience'); ?>
                    </h2>
                    
                    <!-- Text -->
                    <p class="p-xl pr-[2%] md:pr-0 mb-[32px]">
                        <?php echo get_theme_mod('hero_text', 'Mauris donec turpis suscipit sapien ociis sagittis sapien tempor a volute ligula and aliquet tortor'); ?>
                    </p>
                    
                    <!-- Button -->
                    <a href="<?php echo esc_url(get_theme_mod('hero_button_link', '#banner-3')); ?>" class="btn !rounded-[4px] btn--theme hover--tra-white">
                        <?php echo get_theme_mod('hero_button_text', 'Get started for free'); ?>
                    </a>
                    
                    <p class="p-sm btn-txt ico-15 !p-0 m-[20px_0_0_0]">
                        <span class="flaticon-check relative right-[2px] top-[0.5px]"></span> No credit card needed, free 14-day trial
                    </p>

                </div>
            </div>
            <!-- END HERO TEXT -->

            <!-- HERO IMAGE -->
            <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                <div class="hero-1-img wow fadeInLeft">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-1-img.png" alt="hero-image">
                </div>
            </div>

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
