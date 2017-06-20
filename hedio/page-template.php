<?php
/**
 * Template Name: Page template Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();?>
<div class="container">
	<div class="row">
		<?php		
		// if(is_user_logged_in()){
		// 	echo '<script async defer>
		// 	location.assign("/wordpress");
		// 	</script>';
		// }else{			
		while ( have_posts() ) : the_post();
		the_content();
			endwhile; // End of the loop.
		// }
			$query_images_args = array(
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'post_status'    => 'inherit',
				'posts_per_page' => - 1,
				);

			$query_images = new WP_Query( $query_images_args );

			$images = array();
			foreach ( $query_images->posts as $image ) {
				$images[] = wp_get_attachment_url( $image->ID );
			}
			// echo "<img src='".wp_get_attachment_url( 829 )."'>";
			//var_dump($images);
			// echo "<ul>";
			// foreach ($images as $image) {
			// 	echo "<li><img src='".$image."'></li>";
			// }
			// echo "</ul>";
			?>
		</div>
	</div>

	<?php get_footer();