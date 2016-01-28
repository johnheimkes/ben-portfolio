<?php

/**
 * BP Theme
 *
 * @package Functions
 * @author  John Heimkes <john@markupisart.com>
 * @version 1.0
 */

add_action( 'after_setup_theme', array( 'BP_Theme', 'after_setup_theme' ) );

if ( ! isset( $content_width ) ) {
	$content_width = 1000;
}

/**
 * Constants
 */
define( 'BP_THEME_DIR', get_template_directory() . '/' );
define( 'BP_THEME_PATH_URL', get_template_directory_uri() . '/' );
define( 'BP_BOOTSTRAP_ASSETS_URL', get_template_directory_uri() . '/js/bootstrap/' );

define( 'DISALLOW_FILE_EDIT', true );


// DEBUGGER
include_once( 'inc/_krumo/class.krumo.php' );

/**
 * Theme init class
 *
 * @package BP_Theme
 * @author John Heimkes <john@markupisart.com>
 */
class BP_Theme
{

    /**
     * Do theme setup
     * Runs on after_setup_theme hook
     *
     * see after_setup_theme {@link http://goo.gl/hkECf}
     *
     * @return void
     */

    public static function after_setup_theme()
    {
        self::_includes();

        /**
         * Theme Supports
         */
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );
        add_theme_support( 'automatic-feed-links' );

        /**
         * Actions and filters
         */
        

        /**
         * Add Options page for ACF
         */
        if ( function_exists('acf_add_options_page') )
        {
            acf_add_options_page();
        }
    }

    /**
     * Add all includes here
     *
     * @return void
     */
    private static function _includes()
    {
        /**
         * Includes
         */
        include_once 'inc/enqueue-scripts-styles.php';
    }
}

/**
 * Global variable for theme class
 *
 */
if ( !isset( $theme ) ) {
    global $theme;
    $theme = new BP_Theme;
}