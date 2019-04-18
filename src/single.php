<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="PageContent row">
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="Post">
    <div class="container">
  <div class="col-md-12">
    <h1 class="entry-title">
      <?php the_title(); ?>
      </h1>
  </div>
      <div class="col-md-9">
        <div class="entry-content">
          <?php the_content(); ?>
          <?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
          <?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>
          <?php /*?><?php posted_on(); ?><?php */?>
        </div>
      </div>
      <div class="col-md-3">
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="PostImage" style="background-image: url('<?php echo $thumb['0'];?>');"></div>
      </div>
    </div>
  </article>
</div>
<?php endwhile; endif; ?>
    <?php get_footer(); ?>