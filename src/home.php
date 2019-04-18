<?php
/**
 * Template Name: Home
 * 
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
  get_header(); ?>

<!-- Start Slider -->

<!--<div class="HomePage">--> 
<script src="<?php echo get_template_directory_uri(); ?>/js/unslider-min.js"></script>
<div class="banner">
	<ul>
		<?php
		$args = array(
		'category_name' => 'Front Page Slider',
		'order' => 'ASC',
		'orderby' => 'meta_value_num',
		'meta_key' => 'Front Page Slider Order'
		);
		
		$post_query = new WP_Query($args);
		if($post_query->have_posts() ) {
		while($post_query->have_posts() ) {
		$post_query->the_post();
		?>
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<li style="background-image:url('<?php echo $thumb['0'];?>')">
				<a href="?p=<?php the_ID(); ?>">
                <div class="inner col-md-10 col-md-offset-1">
					<h1><?php the_title(); ?></h1>
					<div class="SliderDescription">
						<div class="TheContent">
							<?php $content = get_the_content();
							$content = strip_tags($content);
							echo substr($content, 0, 2000);
							?>
						</div>
					</div>
					<?php /*?><p class="LearnMore"><a href="<?php the_permalink(); ?>" class="btn btn-default">Learn more about
					<?php the_title(); ?>
					&gt;</a></p><?php */?>
					<?php /*?><a href="<?php the_permalink(); ?>"><button>Learn more about
					<?php the_title(); ?>
					&gt;</button></a><?php */?>
				</div>
                </a>
			</li>
		<?php
		}
		}
		?>
	</ul>
</div>
  <script>
	jQuery(document).ready(function($) {
		$('.banner').unslider({
			//animation: 'fade',
			autoplay: true,
			arrows: false,
			nav: true,
			delay: 10000
		});
	});
</script> 
<!-- End Slider --> 
  
<!-- Start Page Content -->
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
<!-- End Page Content --> 
  
<!-- Start Front Page Tiles -->
<div class="Tiles row">
	<?php
	$args = array(
	'category_name' => 'Front Page Tile',
	'orderby' => 'Tile Order',
	'order' => 'ASC',
	);
	
	$post_query = new WP_Query($args);
	if($post_query->have_posts() ) {
	while($post_query->have_posts() ) {
	$post_query->the_post();
	?>
		<div class="Tile col-md-4">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="TileContent" style="background-image:url(<?php echo $thumb['0'];?>)"> <a href="?p=<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div class="TheContent"><?php $content = get_the_content();
			$content = strip_tags($content);
			echo substr($content, 0, 100);
			?>...</div>
			</a> </div>
		</div>
	<?php
	}
	}
	?>
</div>
<!-- End Front Page Tiles --> 
  
  <!-- Start Footer -->
  <?php get_footer(); ?>
  <!-- End Footer --> 
<!--</div>-->
