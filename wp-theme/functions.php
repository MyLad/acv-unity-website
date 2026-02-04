<?php
/**
 * ACV Unity & Development – Theme Functions
 *
 * @package acv-unity
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ── Theme setup ─────────────────────────────────────────── */
function acv_setup() {
    load_theme_textdomain( 'acv-unity', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );
    add_theme_support( 'automatic-feed-links' );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'acv-unity' ),
        'footer'  => __( 'Footer Navigation',  'acv-unity' ),
    ) );

    set_post_thumbnail_size( 400, 300, true );
    add_image_size( 'acv-gallery', 600, 600, true );
}
add_action( 'after_setup_theme', 'acv_setup' );

/* ── Content width ───────────────────────────────────────── */
if ( ! isset( $GLOBALS['content_width'] ) ) {
    $GLOBALS['content_width'] = 1160;
}

/* ── Enqueue styles & scripts ────────────────────────────── */
function acv_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'acv-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap',
        array(), null, 'all'
    );

    // Main stylesheet  (WordPress requires style.css; actual styles are in assets/)
    wp_enqueue_style( 'acv-style' );                                          // theme style.css (header only)
    wp_enqueue_style( 'acv-main', get_template_directory_uri() . '/assets/css/style.css', array( 'acv-style' ), '1.0.0' );

    // Main JS
    wp_enqueue_script(
        'acv-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(), '1.0.0', true  // in footer
    );

    // Comment reply
    if ( is_singular() && comments_open() && get_option( 'comment_threads', 'sync' ) !== 'sync' ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'acv_scripts' );

/* ── Image sizes ─────────────────────────────────────────── */
function acv_image_size_name( $sizes ) {
    $sizes['acv-gallery'] = __( 'Gallery (600×600)', 'acv-unity' );
    return $sizes;
}
add_filter( 'image_size_name_in_html_attributes', 'acv_image_size_name' );

/* ── Excerpt length ──────────────────────────────────────── */
function acv_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'acv_excerpt_length', 999 );

/* ── Custom excerpt more ─────────────────────────────────── */
function acv_excerpt_more() {
    return ' &hellip; <a href="' . get_permalink() . '" class="read-more">' . __( 'Lees meer', 'acv-unity' ) . '</a>';
}
add_filter( 'excerpt_more', 'acv_excerpt_more' );

/* ── Pagination ──────────────────────────────────────────── */
function acv_pagination() {
    $args = array(
        'type'               => 'list',
        'show_0_on_page_one' => false,
        'before_page_num'    => '<span class="page-label">' . __( 'Pagina', 'acv-unity' ) . ' </span>',
    );
    echo paginate_links( $args );
}

/* ── Multisite / Contact Form 7 ──────────────────────────── */
/*
 * If you install Contact Form 7 (https://wordpress.org/plugins/contact-form-7/),
 * replace the <form> in page-contact.php with the CF7 shortcode, e.g.:
 *     <?php echo do_shortcode( '[contact-form-7 id="YOUR_ID" title="Contact"]' ); ?>
 */

/* ── Polylang compatibility ──────────────────────────────── */
/*
 * If you use Polylang (https://wordpress.org/plugins/polylang/) for
 * multilingual support, the language switcher in header.php will
 * automatically use pll_the_languages() when the plugin is active.
 */
