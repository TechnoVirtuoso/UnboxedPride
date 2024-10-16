<div class="latest-articles-block">

	<div class="block-wrap">
		<div class="latest_articles">

            <div class="wrap-heading"><h2 class="heading">Latest Articles</h2></div>
           <div class="text">Check out some of our latest articles below!</div>
			<div class="wrap-blog-posts">
				<?php $args = array(
					'post_type' => 'united-wellness',
					'orderby' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 4,
					'taxonomy' => 'category',


				);
				$the_query  = new WP_Query( $args );
				if ( $the_query->have_posts() ){
				$the_query->the_post();
				foreach ( $the_query->posts as $post ) {
					$post_slug = $post->post_name;
					$date = date("d M, Y",strtotime($post->post_date));
				$char_limit = 200; //character limit
					$content = $post->post_content; //contents saved in a variable
					?>

					<div class="latest-blog">

					<div class="wrap-featured-image">
						<div class="line-top"></div>
						<div class="date"><?php echo $date ?></div><?php echo get_the_post_thumbnail( $post->ID ); ?>
						<div class="line-bottom"></div>
					</div>

						<div class="content_wrap">
							<div class="wrap-title">
								<h1 class="post_title"><?php echo $post->post_title ?></h1>
							</div>
							<div class="description"><?php echo substr(strip_tags($content), 0, $char_limit); ?></div>
							<div class="btn-wrap">
								<div class="shadow"></div>
								<a class="button" href="<?php echo get_the_permalink($post->ID) ?>">Learn More</a>
							</div>
						</div>

					</div>

					<?php } ?>
            </div>
		</div>
		<?php } ?>
	</div>

</div>



