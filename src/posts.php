<?php

/**

 * Template Name: Posts

 * 

 * @package WordPress

 * @subpackage HTML5-Reset-WordPress-Theme

 * @since HTML5 Reset 2.0

 */

  get_header(); ?>

  <?php

    $args = array(

        'category_name' => 'Services'

    );



    $post_query = new WP_Query($args);

if($post_query->have_posts() ) {

  while($post_query->have_posts() ) {

    $post_query->the_post();

    ?>

    <div id="skrollr-body">

    	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<div class="post content" id="post-<?php the_ID(); ?> <?php the_ID(); ?>">

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

       	</div>

        <div class="gap gap-50" style="background-image:url('<?php echo $thumb['0'];?>');"></div>

    </div>

    <?php

  }

}

?>

  

  <div

		class="parallax-image-wrapper parallax-image-wrapper-50"

		data-anchor-target="#<?php the_ID(); ?> + .gap"

		data-bottom-top="transform:translate3d(0px, 300%, 0px)"

		data-top-bottom="transform:translate3d(0px, 0%, 0px)">

  <div

			class="parallax-image parallax-image-50"

			style="background-image:url('<?php echo $thumb['0'];?>')"

			data-anchor-target="#<?php the_ID(); ?> + .gap"

			data-bottom-top="transform: translate3d(0px, -60%, 0px);"

			data-top-bottom="transform: translate3d(0px, 60%, 0px);"

		></div>

</div>



<div id="skrollr-body">





	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



		<div class="post content" id="post-<?php the_ID(); ?> <?php the_ID(); ?>">



			<h2 class="PageTitle"><?php the_title(); ?></h2>



			<?php /*?><?php posted_on(); ?><?php */?>



			<div class="entry">



				<?php the_content(); ?>



				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>



			</div>



			<?php /*?><?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?><?php */?>



		</div>

		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<div class="gap gap-50" style="background-image:url('<?php echo $thumb['0'];?>');"></div>

        

        

		<?php endwhile; endif; ?>



</div>



<?php get_footer(); ?>

