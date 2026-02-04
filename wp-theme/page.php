<?php
/**
 * Default page template – used for all WordPress pages unless
 * a more specific template (page-{slug}.php) exists.
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
      <?php the_title(); ?>
    </p>
    <h1><?php the_title(); ?></h1>
    <?php
    $excerpt = get_the_excerpt();
    if ( $excerpt ) {
        echo '<p>' . esc_html( $excerpt ) . '</p>';
    }
    ?>
  </div>
</section>

<!-- Page content -->
<section class="section">
  <div class="container" style="max-width:840px">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <article <?php post_class(); ?>>
              <div class="animate-on-scroll">
                <?php
                the_content();

                // Page links (for multi-page posts)
                wp_link_pages( array(
                    'before'      => '<div class="page-links">',
                    'after'       => '</div>',
                    'link_before' => '<span class="page-link">',
                    'link_after'  => '</span>',
                ) );
                ?>
              </div>
            </article>
            <?php
        }
    }
    ?>
  </div>
</section>

<?php get_footer(); ?>
