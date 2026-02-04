<?php
/**
 * The Header for ACV Unity & Development theme.
 *
 * @package acv-unity
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar" id="navbar">
  <div class="nav-inner">
    <!-- Logo -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
      <div class="logo-icon">ACV</div>
      <div class="logo-text">
        Unity &amp; Development
        <span><?php _e( 'Afghan Cultural Association', 'acv-unity' ); ?></span>
      </div>
    </a>

    <!-- Mobile toggle -->
    <button class="nav-toggle" id="navToggle" aria-label="<?php _e( 'Open navigatie', 'acv-unity' ); ?>">
      <span></span><span></span><span></span>
    </button>

    <!-- Nav menu + language switcher -->
    <div class="nav-menu" id="navMenu">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav-links',
          'container'      => false,
          'fallback_cb'    => 'acv_fallback_menu',
      ) );
      ?>

      <!-- Language switcher -->
      <div class="lang-switcher">
        <?php
        if ( function_exists( 'pll_the_languages' ) ) {
            // Polylang active – renders language links automatically
            pll_the_languages( array(
                'show_flags'  => false,
                'show_names'  => true,
                'link_class'  => 'lang-btn',
            ) );
        } else {
            // Fallback static buttons
            ?>
            <button class="lang-btn active" title="Nederlands">NL</button>
            <button class="lang-btn" title="Dari">دری</button>
            <button class="lang-btn" title="Pashto">پ</button>
            <?php
        }
        ?>
      </div>
    </div>
  </div>
</nav>

<?php
/**
 * Fallback menu – rendered when no menu has been assigned to 'primary'.
 */
function acv_fallback_menu() {
    $pages = get_pages();
    echo '<ul class="nav-links">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . __( 'Home', 'acv-unity' ) . '</a></li>';
    foreach ( $pages as $page ) {
        $class = ( get_the_ID() === $page->ID ) ? ' class="active"' : '';
        echo '<li><a' . $class . ' href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a></li>';
    }
    echo '</ul>';
}
?>
