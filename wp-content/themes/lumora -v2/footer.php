<?php
/**
 * The footer template for the Lumora theme.
 *
 * Displays the footer content and widget area.
 *
 * @package Lumora
 * @since Lumora 1.0
 */
?>

<!-- Style Switcher -->
<div id="stlChanger" class="fixed z-[9999] right-[-230px] top-[100px] transition-all duration-[400ms] ease-[ease-in-out]">
    <div class="blockChanger bgChanger min-w-[280px] min-h-[280px] w-[230px]">
        <a href="#" class="chBut w-[50px] h-[50px] absolute z-[1000000] left-0 top-[30px] bg-[#ef2853]">
            <span class="flaticon-control-panel"></span>
        </a>
        <div class="chBody w-[230px] relative border h-[425px] overflow-scroll bg-[#2b2e37]">
            <p class="color--white text-[1.125rem] font-semibold">Color Scheme</p>
            <?php
            $color_schemes = ['pink', 'purple', 'violet', 'skyblue', 'magenta', 'crocus', 'red', 'green'];
            foreach ($color_schemes as $color) : ?>
                <a href="javascript:chooseStyle('<?php echo $color; ?>-theme', 60)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/color-scheme/<?php echo $color; ?>.jpg" class="w-[50px] h-[50px] rounded-[8px]">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</div> <!-- END PAGE CONTENT -->
</body>
</html>
