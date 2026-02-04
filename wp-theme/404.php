<?php
/**
 * 404 template.
 *
 * @package acv-unity
 */

get_header();
?>

<section class="hero" style="min-height:70vh">
  <div class="hero-bg"></div>
  <div class="hero-deco hero-deco-1"></div>
  <div class="hero-deco hero-deco-2"></div>
  <div class="hero-content">
    <p class="hero-arabic" style="font-size:1.4rem;opacity:.4">404</p>
    <h1 class="hero-title" style="font-size:clamp(2.5rem,7vw,4.5rem)">
      <?php _e( 'Pagina niet gevonden', 'acv-unity' ); ?>
    </h1>
    <div class="hero-divider"></div>
    <p class="hero-sub">
      <?php _e( 'De pagina die u zoekt bestaat niet meer of is verplaatst.', 'acv-unity' ); ?>
    </p>
    <div class="hero-actions" style="margin-top:32px">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-hero-primary">
        <?php _e( 'Terug naar huis', 'acv-unity' ); ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
