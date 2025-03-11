<?php
/**
 * Brands Section Template
 * @package Lumora
 */
?>
<!-- BRANDS-1
============================================= -->					 
<!-- BRANDS-1 ============================================= -->
<div id="brands-1" class="pt-[80px] lg:pt-[60px] md:pt-[50px] pb-[90px] lg:pb-[70px] md:pb-[60px] bottom-border brands-section">
    <div class="container">
        <!-- BRANDS CAROUSEL -->                
        <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
            <div class="col text-center w-full flex-[1_0_0%] px-[calc(0.5*_1.5rem)] max-w-full">
                <div class="owl-carousel brands-carousel-6">
                <?php 
                $brands = [
                    ['brand-1.png', 'brand-1-white.png'],
                    ['brand-2.png', 'brand-2-white.png'],
                    ['brand-4.png', 'brand-4-white.png'],
                    ['brand-5.png', 'brand-5-white.png'],
                    ['brand-6.png', 'brand-6-white.png'],
                    ['brand-7.png', 'brand-7-white.png'],
                    ['brand-8.png', 'brand-8-white.png'],
                    ['brand-9.png', 'brand-9-white.png']
                ];
                
                foreach ($brands as $brand) : ?>
                    <div class="brand-logo px-[30px] py-0 lg:px-[12px] lg:py-0 md:px-[12px] md:py-0 sm:px-[20px] sm:py-0 xsm:px-[25px] xsm:py-0 overflow-hidden relative transition-all duration-[400ms] ease-[ease-in-out] top-0 hover:-top-1.5">
                        <a href="#"><img class="img-fluid light-theme-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $brand[0]; ?>" alt="brand-logo"></a>
                        <a href="#"><img class="img-fluid dark-theme-img hidden absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $brand[1]; ?>" alt="brand-logo"></a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- END BRANDS CAROUSEL -->
    </div>
    <!-- End container -->
</div>
<!-- END BRANDS-1 -->
<!-- END BRANDS-1 -->