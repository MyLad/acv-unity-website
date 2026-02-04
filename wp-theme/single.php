<?php
/**
 * Single post template.
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
      <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ?: home_url('/') ); ?>">Blog</a>
      <span class="sep">›</span>
      <?php the_title(); ?>
    </p>
    <h1><?php the_title(); ?></h1>
    <p style="font-size:.9rem;opacity:.7">
      <?php echo get_the_date( 'd F Y' ); ?>
      <?php if ( get_the_author() ) echo ' &middot; ' . get_the_author(); ?>
    </p>
  </div>
</section>

<!-- Post content -->
<section class="section">
  <div class="container" style="max-width:780px">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <article <?php post_class( 'animate-on-scroll' ); ?>>
              <!-- featured image -->
              <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin-bottom:36px;border-radius:var(--r-lg);overflow:hidden">
                  <?php the_post_thumbnail( 'full' ); ?>
                </div>
              <?php endif; ?>

              <!-- content -->
              <div class="entry-content">
                <?php
                the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">',
                    'after'  => '</div>',
                ) );
                ?>
              </div>

              <!-- tags -->
              <?php if ( get_the_tags() ) : ?>
                <div style="margin-top:32px;padding-top:24px;border-top:1px solid var(--clr-border)">
                  <?php the_tags( '<span style="color:var(--clr-text-lt);font-size:.82rem;margin-right:8px">Tags:</span>', ', ' ); ?>
                </div>
              <?php endif; ?>
            </article>
            <?php
        }
    }
    ?>

    <!-- Post navigation -->
    <div style="margin-top:48px;padding-top:32px;border-top:1px solid var(--clr-border);display:flex;justify-content:space-between;gap:24px">
      <?php $prev = get_previous_post(); if ( $prev ) : ?>
        <a href="<?php echo esc_url( get_permalink($prev) ); ?>" style="color:var(--clr-primary-lt);font-weight:600">
          ← <?php echo esc_html( get_the_title($prev) ); ?>
        </a>
      <?php endif; ?>
      <?php $next = get_next_post(); if ( $next ) : ?>
        <a href="<?php echo esc_url( get_permalink($next) ); ?>" style="color:var(--clr-primary-lt);font-weight:600;margin-left:auto">
          <?php echo esc_html( get_the_title($next) ); ?> →
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- Comments -->
<?php
if ( comments_open() || get_comments_number() ) {
    comments_template();
}
?>

<?php
get_sidebar(); // optional – only if you add a sidebar later
get_footer();
?>
