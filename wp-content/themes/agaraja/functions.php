<?php
/**
 * agaraja functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package agaraja
 */

if ( ! function_exists( 'agaraja_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function agaraja_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on agaraja, use a find and replace
         * to change 'agaraja' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'agaraja', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'agaraja' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'agaraja_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'agaraja_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function agaraja_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'agaraja_content_width', 640 );
}
add_action( 'after_setup_theme', 'agaraja_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function agaraja_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'agaraja' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'agaraja' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'agaraja_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function agaraja_scripts() {
    // css
    wp_enqueue_style( 'agaraja-bs', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'agaraja-camera', get_template_directory_uri() . '/css/camera.css');
    wp_enqueue_style( 'agaraja-fa', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style( 'agaraja-swiper', get_template_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style( 'agaraja-slick-nav', get_template_directory_uri() . '/css/slicknav.css');
    wp_enqueue_style( 'agaraja-pretty-photo', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style( 'agaraja-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style( 'agaraja-owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style( 'agaraja-style', get_template_directory_uri() . '/css/style.css');
    // js loads before
    wp_enqueue_script( 'agaraja-js-jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', array(), '1.12.4', false );
    wp_enqueue_script( 'agaraja-js-mcustom', get_template_directory_uri() . '/js/jquery.mobile.customized.min.js', array(), '1.3', false );
    wp_enqueue_script( 'agaraja-js-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3', false );
    wp_enqueue_script( 'agaraja-js-camera', get_template_directory_uri() . '/js/camera.min.js', array(), '1.4', false );
    wp_enqueue_script( 'agaraja-js-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array(), '2.2.1', false );
    wp_enqueue_script( 'agaraja-js-sort', get_template_directory_uri() . '/js/sorting.js', array(), false );
    wp_enqueue_script( 'agaraja-js-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '3.0.4', false );
    wp_enqueue_script( 'agaraja-js-swiper', get_template_directory_uri() . '/js/swiper.jquery.min.js', array(), '3.4.2', false );
    wp_enqueue_script( 'agaraja-js-main', get_template_directory_uri() . '/js/main.js', array(), false );
    // js loads after
    wp_enqueue_script( 'agaraja-js-popper', get_template_directory_uri() . '/js/popper.min.js', array(), true );
    wp_enqueue_script( 'agaraja-js-bs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0', true );
    wp_enqueue_script( 'agaraja-js-slick-nav', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), true );
    wp_enqueue_script( 'agaraja-js-pretty-photo', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '3.1.6', true );
}
add_action( 'wp_enqueue_scripts', 'agaraja_scripts' );

// add hash class to anchor tag
function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'hash';
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

// add last class to the last li menu
function add_last($items) {
    $items[count($items)]->classes[] = 'last';
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_last');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

