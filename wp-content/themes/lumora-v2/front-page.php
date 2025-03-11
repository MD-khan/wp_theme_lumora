<?php
/**
 * Front Page Template
 *
 * @package Lumora
 * @since Lumora 1.0
 */

get_header(); // Include header.php
?>
 
 <?php get_template_part('template-parts/front-page/hero'); ?>
 
 <?php get_template_part('template-parts/front-page/services'); ?>

 <?php get_template_part('template-parts/front-page/about'); ?>
 

 <?php get_template_part('template-parts/front-page/projects'); ?>



<?php get_footer(); // Include footer.php ?>
