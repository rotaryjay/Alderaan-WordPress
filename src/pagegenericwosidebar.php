<?php
/**
 * Template Name: Generic Page Template without Sidebar
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
  get_header(); ?>
  
<!-- Start Main Page Content -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container-fluid">
    <div class="PageContent row">
      <div class="col-md-12">
        <div class="ContentContainer">
          <h2 class="PageTitle">
            <?php the_title(); ?>
          </h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
<!-- End Main Page Content -->

<!-- Start Footer -->
  <?php get_footer(); ?>
<!-- End Footer -->

<!-- Start Hashtag URL Update Script -->
<script>
$(function () {
    var currentHash = "#initial_hash"
    $(document).scroll(function () {
        $('.scrollContent .spacer.s0').each(function () {
            var top = window.pageYOffset;
            var distance = top - $(this).offset().top;
            var hash = $(this).attr('id');
            // 30 is an arbitrary padding choice, 
            // if you want a precise check then use distance===0
            if (distance < 30 && distance > -30 && currentHash != hash) {
                window.location.hash = (hash);
                currentHash = hash;
            }
        });
    });
});
</script>
<!-- End Hashtag URL Update Script -->
