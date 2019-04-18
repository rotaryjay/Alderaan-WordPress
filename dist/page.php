<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

<div class="PageContent row">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <h2 class="PageTitle">
      <?php the_title(); ?>
    </h2>
    <?php /*?><?php posted_on(); ?><?php */?>
    <div class="entry">
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
    </div>
    <?php /*?><?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?><?php */?>
  </article>
  <?php /*?><?php comments_template(); ?><?php */?>
  <?php endwhile; endif; ?>
</div>
<?php /*?><?php get_sidebar(); ?><?php */?>
<?php get_footer(); ?>
