<?php
/**
 * Site Branding (Logo & Site Name)
 * 
 * @package Lumora
 */
?>

<div class="desktoplogo">
    <a href="<?php echo home_url('/'); ?>" class="logo-black">
        <?php if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-pink.png" alt="<?php bloginfo('name'); ?>">
        <?php } ?>
    </a>
</div>
