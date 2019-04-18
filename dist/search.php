<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="PageContent SearchResults">
  <?php if (have_posts()) : ?>
  <h1>
    <?php _e('Search Results','html5reset'); ?>
  </h1>
  <?php post_navigation(); ?>
  <?php while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>"> <a href="<?php echo post_permalink( $ID ); ?>">
    <h3>
      <?php the_title(); ?>
    </h3>
    <span class="ResultURL"><?php echo post_permalink( $ID ); ?></span>
    </a>
    <?php /*?><?php posted_on(); ?><?php */?>
    <div class="entry">
      <?php the_excerpt(); ?>
    </div>
  </article>
  <?php endwhile; ?>
  <?php post_navigation(); ?>
  <?php else : ?>
  <h2>
    <?php _e('Nothing Found','html5reset'); ?>
  </h2>
  <?php endif; ?>
</div>
<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
