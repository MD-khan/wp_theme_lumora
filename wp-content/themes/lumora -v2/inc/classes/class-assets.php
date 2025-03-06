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
    
        // Dropdown Effects (Ensure fade-down.css exists)
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
    }
    

    public function register_scripts() {
        // Add scripts if needed in the future
    }
}
