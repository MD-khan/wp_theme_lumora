<?php
/**
 * Manages theme assets (styles and scripts).
 */

namespace Lumora\Inc;

use Lumora\Inc\Traits\Singleton;

class Assets {

    use Singleton;

    protected function __construct() {
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /**
         * Actions
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }
    public function register_styles() {
        // Google Fonts
        wp_enqueue_style('google-font-rubik', 'https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap', [], null);
        wp_enqueue_style('google-font-jakarta', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap', [], null);
        wp_enqueue_style('google-font-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', [], null);
    
        // Font Icons
        if (file_exists(LUMORA_DIR_PATH . '/assets/css/flaticon.css')) {
            wp_enqueue_style('lumora-flaticon', LUMORA_DIR_URI . '/assets/css/flaticon.css', [], filemtime(LUMORA_DIR_PATH . '/assets/css/flaticon.css'));
        }
    
        // Plugin Stylesheets
        $plugin_styles = [
            'magnific-popup'   => 'magnific-popup.css',
            'owl-carousel'     => 'owl.carousel.min.css',
            'owl-theme'        => 'owl.theme.default.min.css',
            'lunar'            => 'lunar.css',
            'animate'          => 'animate.css',
            'menu'             => 'menu.css'
        ];
    
        foreach ($plugin_styles as $handle => $filename) {
            $file_path = LUMORA_DIR_PATH . "/assets/css/{$filename}";
            if (file_exists($file_path)) {
                wp_enqueue_style("lumora-{$handle}", LUMORA_DIR_URI . "/assets/css/{$filename}", [], filemtime($file_path));
            }
        }
    
        // Dropdown Effects
        if (file_exists(LUMORA_DIR_PATH . '/assets/css/dropdown-effects/fade-down.css')) {
            wp_enqueue_style('lumora-dropdown-effects', LUMORA_DIR_URI . '/assets/css/dropdown-effects/fade-down.css', [], filemtime(LUMORA_DIR_PATH . '/assets/css/dropdown-effects/fade-down.css'));
        }
    
        // **Dynamic Color Stylesheets**
        $color_themes = [
            'blue-theme'    => 'blue-theme.css',
            'crocus-theme'  => 'crocus-theme.css',
            'green-theme'   => 'green-theme.css',
            'magenta-theme' => 'magenta-theme.css',
            'pink-theme'    => 'pink-theme.css',
            'purple-theme'  => 'purple-theme.css',
            'red-theme'     => 'red-theme.css',
            'skyblue-theme' => 'skyblue-theme.css',
            'violet-theme'  => 'violet-theme.css'
        ];
    
        foreach ($color_themes as $handle => $filename) {
            $file_path = LUMORA_DIR_PATH . "/assets/css/colors/{$filename}";
            if (file_exists($file_path)) {
                wp_enqueue_style("lumora-{$handle}", LUMORA_DIR_URI . "/assets/css/colors/{$filename}", [], filemtime($file_path));
            }
        }
    
        // **Main Stylesheet (style.css)**
        wp_enqueue_style('lumora-style', get_stylesheet_uri(), [], filemtime(get_stylesheet_directory() . '/style.css'));
    
        // **Adding Inline CSS for Header & Navigation**
        $inline_css = "
        /* Header Styles */
        #header {
            transition: all 0.3s ease-in-out;
            background-color: transparent;
        }
    
        .header-wrapper {
            position: fixed;
            z-index: 1030;
            top: 0;
            left: 0;
            right: 0;
            transition: all 0.3s ease-in-out;
        }
    
        .wsmobileheader {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
    
        .wsmainfull {
            background-color: transparent;
            box-shadow: none;
            padding: 20px 0;
        }
    
        .wsmenu-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 20px;
        }
    
        .wsmenu-list li {
            position: relative;
        }
    
        .wsmenu-list li a {
            color: #b1b7cd;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            padding: 10px 15px;
            transition: color 0.3s ease-in-out;
        }
    
        .wsmenu-list li a:hover {
            color: #ef2853;
        }
    
        /* Mobile Menu */
        @media screen and (max-width: 768px) {
            .wsmenu-list {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
    
            .wsmenu {
                display: none;
            }
    
            .wsmenu.active {
                display: block;
            }
        }
        ";
    
        // Inject inline CSS
        wp_add_inline_style('lumora-style', $inline_css);
    }
    

    public function register_scripts() {
        // Ensure jQuery is enqueued from WordPress core (instead of manually loading from assets)
        if (!wp_script_is('jquery', 'enqueued')) {
            wp_enqueue_script('jquery');
        }
    
        // Define `$ = jQuery` globally before other scripts load
        wp_add_inline_script('jquery', 'var $ = jQuery;', 'before');
    
        // Core JavaScript Files
        $scripts = [
            'bootstrap'          => 'bootstrap.min.js',
            'modernizr'          => 'modernizr.custom.js',
            'jquery-easing'      => 'jquery.easing.js',
            'jquery-appear'      => 'jquery.appear.js',
            'menu'               => 'menu.js',
            'owl-carousel'       => 'owl.carousel.min.js',
            'pricing-toggle'     => 'pricing-toggle.js',
            'magnific-popup'     => 'jquery.magnific-popup.min.js',
            'request-form'       => 'request-form.js',
            'jquery-validate'    => 'jquery.validate.min.js',
            'ajaxchimp'          => 'jquery.ajaxchimp.min.js',
            'popper'             => 'popper.min.js',
            'lunar'              => 'lunar.js',
            'wow'                => 'wow.js',
            'changer'            => 'changer.js',
            'styleswitch'        => 'styleswitch.js',
            'custom'             => 'custom.js'
        ];
    
        // Enqueue all scripts, making sure jQuery is a dependency
        foreach ($scripts as $handle => $filename) {
            $file_path = LUMORA_DIR_PATH . "/assets/js/{$filename}";
            if (file_exists($file_path)) {
                wp_enqueue_script(
                    "lumora-{$handle}",
                    LUMORA_DIR_URI . "/assets/js/{$filename}",
                    ['jquery'], // Ensures jQuery is loaded first
                    filemtime($file_path),
                    true
                );
            }
        }
    
        // Custom Inline Script for Context Menu Prevention and Dark Mode Toggle
        wp_add_inline_script('lumora-custom', "
            jQuery(document).on({
                'contextmenu': function (e) {
                    console.log('ctx menu button:', e.which);
                    e.preventDefault();
                },
                'mousedown': function (e) {
                    console.log('normal mouse down:', e.which);
                },
                'mouseup': function (e) {
                    console.log('normal mouse up:', e.which);
                }
            });
    
            jQuery(function ($) {
                $('.switch').click(function () {
                    $('body').toggleClass('theme--dark');
                    if ($('body').hasClass('theme--dark')) {
                        $('.switch').text('Light Mode');
                    } else {
                        $('.switch').text('Dark Mode');
                    }
                });
            });
    
            jQuery(document).ready(function ($) {
                if ($('body').hasClass('theme--dark')) {
                    $('.switch').text('Light Mode');
                } else {
                    $('.switch').text('Dark Mode');
                }
            });
        ");
    }

    
    
    
}
