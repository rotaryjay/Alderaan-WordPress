<?php
/**
 * Template Name: Parallax Page without Sidebar
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
  get_header(); ?>
  <div class="PageCategory" style="display:none;">
	<?php
    global $wp_query;
    $postid = $wp_query->post->ID;
    echo get_post_meta($postid, 'Page Category', true);
    wp_reset_query();
    ?>
  </div>
  
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


<!-- Start Posts -->
<div class="scrollContent">
  <?php
    $args = array(
        'category_name' => get_post_meta($postid, 'Page Category', true),
		'order' => 'ASC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'Order'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
  <div class="spacer s0" id="<?php the_ID(); ?>"></div>
  <div id="parallax<?php the_ID(); ?>" class="parallaxParent">
    <div style="background-image: url('<?php echo $thumb['0'];?>');" class="ScrollMagicBackground"></div>
    </div>
  <div class="spacer s1">
    <div class="content" id="ID<?php the_ID(); ?>">
      <div class="ContentContainer">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      </div>
    </div>
  <?php
  }
}
?>
</div>
<!-- End Posts -->

<!-- Start Footer -->
  <?php get_footer(); ?>
<!-- End Footer -->

<!-- Start Parallax Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic/TweenMax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic/ScrollMagic.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic/animation.gsap.min.js"></script>
<!--<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic/debug.addIndicators.min.js"></script>-->
<script>
	// init controller
	var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
	
	// build scenes
  <?php
    $args = array(
        'category_name' => get_post_meta($postid, 'Page Category', true),
		'order' => 'ASC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'Order'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
	new ScrollMagic.Scene({triggerElement: "#parallax<?php the_ID(); ?>"})
					.setTween("#parallax<?php the_ID(); ?> > div", {y: "80%", ease: Linear.easeNone})
					.addIndicators()
					.addTo(controller);

  <?php
  }
}
?>
</script>
<!-- End Parallax Scripts -->

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

<script>
$( window ).load(function() {
	var PageCategory = $( ".PageCategory" ).html();
	// alert( PageCategory );
});
</script>