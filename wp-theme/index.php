<?php
/**
 * The main WordPress template file – blog listing / fallback.
 *
 * @package acv-unity
 */

get_header();
?>

<!-- Page hero -->
<section class="page-hero">
  <div class="container">
    <p class="breadcrumb">
      <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a>
      <span class="sep">›</span>
      <?php _e( 'Blog', 'acv-unity' ); ?>
    </p>
    <h1><?php _e( 'Nieuws &amp; Updates', 'acv-unity' ); ?></h1>
    <p><?php _e( 'Blijf op de hoogte van de laatste activiteiten en aankondigingen.', 'acv-unity' ); ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    if ( have_posts() ) {
        echo '<div class="reports-grid">';
        while ( have_posts() ) {
            the_post();
        ?>
            <article <?php post_class( 'report-card animate-on-scroll' ); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <div class="report-thumb">
                  <?php the_post_thumbnail( 'acv-gallery' ); ?>
                </div>
              <?php else : ?>
                <div class="report-thumb" style="background:linear-gradient(145deg,var(--clr-primary-mid),var(--clr-primary));height:160px;border-radius:var(--r-lg) var(--r-lg) 0 0"></div>
              <?php endif; ?>
              <div style="padding:20px">
                <div class="rpt-year" style="font-size:1rem;margin-bottom:4px">
                  <a href="<?php echo esc_url( get_permalink() ); ?>" style="color:var(--clr-primary);text-decoration:none">
                    <?php the_title(); ?>
                  </a>
                </div>
                <div class="rpt-label"><?php echo get_the_date( 'd M Y' ); ?></div>
                <p style="font-size:.88rem;color:var(--clr-text-mid);margin-top:8px;line-height:1.6">
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Lees meer →', 'acv-unity' ); ?></a>
              </div>
            </article>
        <?php
        }
        echo '</div>';

        // Pagination
        echo '<div style="text-align:center;margin-top:48px">';
        acv_pagination();
        echo '</div>';
    } else {
        get_template_part( 'template-parts/post/post-none' );
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>
