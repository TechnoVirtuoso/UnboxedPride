<div class="wellness-blog-block">

	<div class="block-wrap">
		<div class="wellness-blog_post">
			<?php if($block['heading']){ ?>
            <div class="wrap-heading"><h2 class="heading"><?php echo $block['heading'] ?></h2></div>
			<?php } ?>
            <div class="wrap-wellness-blogs-post">
			<?php 

			$featured_posts = $block['custom_recent_blogs'];
			
		
			foreach ( $featured_posts as $post ) {
				
				$post_slug = $post->post_name;
                $date = date("d M, Y",strtotime($post->post_date));

				?>

				<div class="wellness-blog">

                <div class="wrap-featured-image"><?php echo get_the_post_thumbnail( $post->ID ); ?></div>

					<div class="content_wrap">
                        <div class="wrap-date-title">
                            <h1 class="post_title"><?php echo $post->post_title ?></h1>
                            <div class="date"><?php echo $date ?></div>
                        </div>
                        <div class="description">
						<?php
                                        $content = $post->post_content;
                                        echo substr($content, 0, 110). ' ';
                                    ?>
						</div>
                        <div class="btn-wrap">
							<div class="shadow"></div>
                            <a class="button" href="<?php echo get_the_permalink($post->ID)?>">View Article</a>
                        </div>
					</div>

				</div>

			<?php } ?>
            </div>
			<?php if($block['button']){ ?>
            <div class="wrap-btn">
				<div class="btn-wrap">
					<div class="shadow"></div>
					<a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
					</a>
				</div>
            </div>
			<?php } ?>
		</div>
		
	</div>

</div>


