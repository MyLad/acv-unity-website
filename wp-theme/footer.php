<?php
/**
 * The Footer for ACV Unity & Development theme.
 *
 * @package acv-unity
 */
?>
<footer class="footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Brand -->
      <div class="footer-brand">
        <div class="logo">
          <div class="logo-icon">ACV</div>
          <div class="logo-text" style="color:#fff">
            Unity &amp; Development
            <span><?php _e( 'Afghan Cultural Association', 'acv-unity' ); ?></span>
          </div>
        </div>
        <p><?php _e( 'We ondersteunen Afghan gemeenschap leden in de Leiden-regio door cultuur, onderwijs en sociale integratie.', 'acv-unity' ); ?></p>
      </div>

      <!-- Quick links (footer menu) -->
      <div>
        <h4><?php _e( 'Snelle links', 'acv-unity' ); ?></h4>
        <?php
        if ( has_nav_menu( 'footer' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'menu_class'     => '',
                'container'      => 'ul',
            ) );
        } else {
            // Fallback
            echo '<ul>';
            $slugs = array( 'over', 'bestuur', 'anbi', 'galerij' );
            foreach ( $slugs as $slug ) {
                $page = get_page_by_path( $slug );
                if ( $page ) {
                    echo '<li><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a></li>';
                }
            }
            echo '</ul>';
        }
        ?>
      </div>

      <!-- More links -->
      <div>
        <h4><?php _e( 'Meer', 'acv-unity' ); ?></h4>
        <ul>
          <?php
          foreach ( array( 'verslagen', 'contact' ) as $slug ) {
              $page = get_page_by_path( $slug );
              if ( $page ) {
                  echo '<li><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a></li>';
              }
          }
          ?>
        </ul>
      </div>

      <!-- Contact details -->
      <div>
        <h4><?php _e( 'Contactgegevens', 'acv-unity' ); ?></h4>
        <ul>
          <li>Roekenpad 8</li>
          <li>2317KL Leiden</li>
          <li>+31 6 23 98 4003</li>
          <li><?php _e( 'Op afspraak', 'acv-unity' ); ?></li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> ACV Unity &amp; Development. <?php _e( 'Alle rechten voorbehouden.', 'acv-unity' ); ?></span>
      <span>RSIN: 851292677 &nbsp;|&nbsp; ANBI <?php _e( 'Erkend', 'acv-unity' ); ?></span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
