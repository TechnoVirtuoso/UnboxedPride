<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $query->have_posts() )
{
	?>

	<!-- Found <?php echo $query->found_posts; ?> Results<br />
	Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br /> -->

	<div class="pagination">

		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>

<div class="wrap-teams">
<div class="wrap-therapist-team ">
	<?php
	$index = 1;
	while ($query->have_posts())
	{
		$query->the_post();
		$data = get_field("therapist_details", $query->ID);
		?>



		<div class="member-block">
			<div class="front">
				<div class="member-image">
					<?php echo the_post_thumbnail("small"); ?>
				</div>
				<div class="member_details">
					<div class="details">
						<h2 class="heading"><?php the_title(); ?></h2>
						<div class="pronoun"><?php  echo $data["pronouns"] ?></div>
					</div>
					<div class="position"><?php  echo $data["position"] ?></div>
					<div class="description"><div class="text"><?php echo $data['therapist_info_details'] ?></div></div>
				
				
			
				</div>
				<div class="profile_btn">
					<a href="<?php the_permalink(); ?>">View Profile <img src="/wp-content/uploads/2023/07/arrow-right.svg" alt=""></a>
				</div>

		</div>
		<div class="back">
			<div>
				<div class="member-image">
					<?php echo the_post_thumbnail("small"); ?>
					<div class="details">
						<h2 class="heading"><?php the_title(); ?></h2>
						<div class="position"><?php  echo $data["position"] ?></div>
					</div>
				</div>
				<div class="member_details">
				
					<div class="therapy">
						<?php
						// $terms = get_the_terms( $query->ID, 'therapist_approach' ); 
						$terms = get_the_terms( $query->ID, 'text_filter' ); 
						if ( $terms && ! is_wp_error( $terms ) ) : 

							$i = 0;
							foreach ( $terms as $term ) {
								if($i== 3){
									break;
								}
								?>

								<div class="therapy_type"> <span class= "dot"></span> <?php echo $term -> name; ?></div>
								<?php
								$i++;
							}
							?>
							
						<?php endif; ?>
					</div>
					<div class="description">
						<p><?php the_content(); ?></p>
					</div>
			

				</div>
			</div>
			<div>
				<div class="profile_btn">
						<a href="<?php the_permalink(); ?>">View Profile <img src="/wp-content/uploads/2023/07/arrow-right.svg" alt=""></a>
				</div>
				<div class="call_btn">
						<a href="<?php the_permalink(); ?>">Free Introduction Call <img src="/wp-content/uploads/2023/07/phone.svg" alt=""></a>
				</div>

			</div>
		
			

		</div>

			</div>
	

			<!-- <div class="member-image">
				<?php echo the_post_thumbnail("small"); ?>
			</div> -->
			
			


			<!-- <div class="member-details">
				<div class="line"></div>
				<h2 class="heading"><?php the_title(); ?></h2>
				<div class="text"><?php the_content(); ?></div>
			</div> -->


		<?php
		$index++;
	}
	?>
		</div>
	</div>
	<!-- <div class="wrap-pagination-number">Page <?php echo $query->query['paged']; ?> of <?php echo $query->max_num_pages; ?><br /></div> -->

	<div class="pagination">

		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<?php
}
else
{
	echo "No Results Found";
}
?>
