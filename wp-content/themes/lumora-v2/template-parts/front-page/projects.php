<?php
/**
 * Project show  Section Template
 * @package Lumora
 */
?>
<section id="projects-1" class="inner-page-hero projects-section pt-[180px] lg:pt-[160px] md:mt-[80px] md:pt-[70px]">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)] justify-center">
            <div class="md:w-10/12 lg:w-9/12 xl:w-9/12 w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
                <div class="section-title mb--80 mb-[80px] lg:mb-[60px] md:mb-[50px] text-center">
                    <h2 class="s-52 w-700 text-[3.25rem] font-bold leading-[1.25] font-Jakarta tracking-[-0.5px]">
                        <?php echo get_theme_mod('projects_title', 'Great Design That Works!'); ?>
                    </h2>
                    <p class="s-21 color--grey text-[1.3125rem] mt-[18px]">
                        <?php echo get_theme_mod('projects_subtitle', 'Ligula risus auctor tempus magna feugiat lacinia.'); ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- PROJECTS WRAPPER -->
        <div class="projects-wrapper p-[0_10px] md:p-0">
            <div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)] items-center row-cols-1 row-cols-md-2">
                <?php
                $projects = [
                    ['title' => 'Mockup Poster', 'image' => 'project-01.jpg'],
                    ['title' => 'Glued Poster', 'image' => 'project-02.jpg'],
                    ['title' => 'Double Color', 'image' => 'project-03.jpg'],
                    ['title' => 'Reativity', 'image' => 'project-04.jpg'],
                    ['title' => 'Vintage Poster', 'image' => 'project-05.jpg'],
                    ['title' => 'Paper Portrait', 'image' => 'project-06.jpg']
                ];
                foreach ($projects as $project) : ?>
                    <div class="col md:w-6/12 lg:w-6/12 xl:w-6/12 flex-[0_0_auto] w-full max-w-full px-[calc(0.5*_1.5rem)]">
                        <div class="project-details mb-[50px] lg:mb-[40px] md:mb-[35px] sm:mb-[40px] xsm:mb-[40px]">
                            <h5 class="s-24 text-[1.5rem] font-Jakarta mb-[30px]">
                                <?php echo esc_html($project['title']); ?>
                            </h5>
                            <div class="project-preview relative overflow-hidden group rounded-[10px]">
                                <div class="hover-overlay w-full h-auto overflow-hidden relative">
                                    <img class="img-fluid transition-transform duration-[400ms] scale-100 group-hover:scale-105" 
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/<?php echo esc_attr($project['image']); ?>" 
                                        alt="<?php echo esc_attr($project['title']); ?>">
                                    <div class="item-overlay opacity-0 absolute w-full h-full transition-all left-0 top-0 bg-[rgba(20,20,20,0.25)] group-hover:opacity-100"></div>
                                </div>
                                <div class="project-link ico-35 color--white w-full absolute -translate-y-2/4 opacity-0 text-center text-white transition-all top-[55%] group-hover:opacity-100 group-hover:top-2/4">
                                    <a href="#" title="View Project"><span class="flaticon-visibility"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- END PROJECTS WRAPPER -->
    </div>
    <!-- End container -->
</section>

<!-- PAGE PAGINATION
============================================= -->
<div class="py--100 py-[100px] lg:py-[80px] md:py-[70px]  page-pagination theme-pagination">
<div class="container">
<div class="flex flex-wrap mx-[calc(-0.5*_1.5rem)]">
    <div class="w-full flex-[0_0_auto] px-[calc(0.5*_1.5rem)] max-w-full">
        <nav aria-label="Page navigation">
            <ul class="pagination ico-20 justify-center flex pl-0 [list-style:none]">
            <li class="page-item disabled"><a class="page-link relative block text-[#6c757d] text-[1.1rem] font-medium bg-transparent rounded [transition:all_400ms_ease-in-out] m-[0_8px] p-[2px_14px] [border:2px_solid_transparent] hover:text-[#6c757d] hover:bg-transparent hover:border-2 hover:border-solid hover:border-[#ccc] focus:text-[#6c757d] focus:bg-transparent focus:shadow-[0_0] focus:border-2 focus:border-solid focus:border-transparent xsm:text-[0.95rem] xsm:px-[10px] xsm:py-[2px]" href="#" tabindex="-1"><span class="flaticon-back"></span></a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link relative block text-[#6c757d] text-[1.1rem] font-medium bg-transparent rounded [transition:all_400ms_ease-in-out] ml-[-1px] mr-[8px] p-[2px_14px] [border:2px_solid_transparent] hover:text-[#6c757d] hover:bg-transparent hover:border-2 hover:border-solid hover:border-[#ccc] focus:text-[#6c757d] focus:bg-transparent focus:shadow-[0_0] focus:border-2 focus:border-solid focus:border-transparent xsm:text-[0.95rem] xsm:px-[10px] xsm:py-[2px]" href="#">1</a></li>
            <li class="page-item"><a class="page-link relative block text-[#6c757d] text-[1.1rem] font-medium bg-transparent rounded [transition:all_400ms_ease-in-out] ml-[-1px] mr-[8px] p-[2px_14px] [border:2px_solid_transparent] hover:text-[#6c757d] hover:bg-transparent hover:border-2 hover:border-solid hover:border-[#ccc] focus:text-[#6c757d] focus:bg-transparent focus:shadow-[0_0] focus:border-2 focus:border-solid focus:border-transparent xsm:text-[0.95rem] xsm:px-[10px] xsm:py-[2px]" href="#">2</a></li>
            <li class="page-item"><a class="page-link relative block text-[#6c757d] text-[1.1rem] font-medium bg-transparent rounded [transition:all_400ms_ease-in-out] ml-[-1px] mr-[8px] p-[2px_14px] [border:2px_solid_transparent] hover:text-[#6c757d] hover:bg-transparent hover:border-2 hover:border-solid hover:border-[#ccc] focus:text-[#6c757d] focus:bg-transparent focus:shadow-[0_0] focus:border-2 focus:border-solid focus:border-transparent xsm:text-[0.95rem] xsm:px-[10px] xsm:py-[2px]" href="#">3</a></li>
            <li class="page-item"><a class="page-link relative block text-[#6c757d] text-[1.1rem] font-medium bg-transparent rounded [transition:all_400ms_ease-in-out] ml-[-1px] mr-[8px] p-[2px_14px] [border:2px_solid_transparent] hover:text-[#6c757d] hover:bg-transparent hover:border-2 hover:border-solid hover:border-[#ccc] focus:text-[#6c757d] focus:bg-transparent focus:shadow-[0_0] focus:border-2 focus:border-solid focus:border-transparent xsm:text-[0.95rem] xsm:px-[10px] xsm:py-[2px]" href="#" aria-label="Next"><span class="flaticon-next"></span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- End row -->	
</div>
<!-- End container -->
</div>
<!-- END PAGE PAGINATION -->
