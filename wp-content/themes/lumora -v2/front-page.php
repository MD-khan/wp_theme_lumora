<?php
/**
 * Front Page Template
 *
 * @package Lumora
 * @since Lumora 1.0
 */

get_header(); // Include header.php
?>

<!-- Hero Section -->
<?php get_template_part('template-parts/hero'); ?>

<!-- Other Sections (Features, Testimonials, CTA) -->
<?php #get_template_part('template-parts/features'); ?>
<?php #get_template_part('template-parts/testimonials'); ?>
<?php #get_template_part('template-parts/cta'); ?>

<?php get_footer(); // Include footer.php ?>
