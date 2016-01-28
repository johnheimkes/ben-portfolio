<?php
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

/**
 * Enqueue scripts
 *
 * @return void
 */
function enqueue_scripts()
{
    wp_register_script(
        'bp-bootstrap',
        BP_BOOTSTRAP_ASSETS_URL . 'js/bootstrap.min.js',
        array( 'jquery' )
    );

    wp_register_script(
        'bp-global',
        BP_THEME_PATH_URL . 'js/global.js',
        array( 'jquery' )
    );
    
    wp_register_script(
        'jquery-cookie',
        BP_THEME_PATH_URL . 'js/jquery.cookie.js',
        array( 'jquery' )
    );
    
    // Queue the scripts. Note that because bp-bootstrap was registered
    // with jquery as a dependency, it does not need to be enqueued here.
    wp_enqueue_script( 'bp-bootstrap' );
    wp_enqueue_script( 'bp-global' );
}

/**
 * Register styles
 *
 * @global WP_Styles $wp_styles
 */
function enqueue_styles()
{
    global $wp_styles;

    wp_register_style(
        'bootstrap',
        BP_BOOTSTRAP_ASSETS_URL . 'css/bootstrap.min.css'
    );

    wp_register_style(
        'bp-layout',
        BP_THEME_PATH_URL . 'css/layout.css',
        array( 'bootstrap' )
    );

    wp_register_style(
        'bp-global',
        BP_THEME_PATH_URL . 'css/global.css',
        array( 'bootstrap' )
    );

    wp_register_style(
        'bp-responsive',
        BP_THEME_PATH_URL . 'css/responsive.css',
        array( 'bootstrap' )
    );

    wp_register_style(
        'bp-typography',
        BP_THEME_PATH_URL . 'css/typography.css',
        array( 'bootstrap' )
    );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'bp-typography' );
    wp_enqueue_style( 'bp-global' );
    wp_enqueue_style( 'bp-layout' );
    wp_enqueue_style( 'bp-responsive' );

}