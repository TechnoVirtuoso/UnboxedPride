
<?php get_header(); ?>

<?php
    $post_data = get_field("post_details",$post->ID);
    $therapist_data = get_field("therapist_profile_data",$post->ID);
    $date = date("d M, Y",strtotime($post->post_date));
?>

<div class="single-post-page">
    <div class="post-inner-wrapper">
        <banner class="global-banner-section">
            <div class="wrap-global-banner">
                <div class="container">
                    <div class="content-block full_width">
                    <div class="wrap-heading">

                           <h1 class="heading line"><?php echo $post->post_title ?><span>.</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </banner>

    <div class="wrap-single-post">
        <div class="post-description-column">
        <div class="post-details">
            <div class="wrap-featured-image">
                <div class="line-top"></div>
                <div class="date"><?php echo $date ?></div><?php echo get_the_post_thumbnail( $post->ID ); ?>
                <div class="line-bottom"></div>
            </div>
            <div class="content_wrap">
                <div class="wrap-title">
                    <h1 class="post_title"><?php echo $post->post_title ?></h1>

                </div>
                <div class="description"><?php the_content() ?></div>
            </div>
            </div>
            <div class="wrap-quote-block">
                <?php foreach($post_data['quotation_block'] as $quote){ ?>
                    <div class="quotation-block">
                        <div class="quote-wrap">
                            <h2 class="heading"><?php echo $quote['quotation'] ?></h2>
                        </div>
                        <?php if($quote['image']){ ?>
                        <div class="quote-image-block">
                            <div class="wrap-featured-image">
                                <div class="line-top"></div>
                                <div class="date"><?php echo $date ?></div><img src="<?php echo $quote['image']['url'] ?>" alt="">
                                <div class="line-bottom"></div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>

        </div>

        <div class="sidebar">
            <div class="wrap-related-posts">
                <h2 class="heading">Related Posts</h2>
                    <?php $args = array(
                        'post_type' => 'united-wellness',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                        'taxonomy' => 'category',


                    );
                    $the_query  = new WP_Query( $args );
                    if ( $the_query->have_posts() ){
                    $the_query->the_post();
                    foreach ( $the_query->posts as $post ) {
                        $post_slug = $post->post_name;
                        ?>

                        <a href="<?php echo get_the_permalink($post->ID)?>" class="related-post">

                            <div class="wrap-featured-image">
                                <div class="line-top"></div>
                                <?php echo get_the_post_thumbnail( $post->ID,"thumbnail" ); ?>
                                <div class="line-bottom"></div>
                            </div>

                            <div class="content_wrap">
                                <div class="wrap-title">
                                    <h1 class="post_title"><?php echo $post->post_title ?></h1>
                                </div>
                                <div class="description">
                                    <?php
                                            $content = get_the_content();
                                            echo substr($content, 0, 110). ' ';
                                        ?>
                                        </div>
                            </div>
                        </a>
                            <?php } ?>
                        <?php } ?>
                </div>
                <?php if($therapist_data['heading']){ ?>
                <div class="wrap-therapist-profile-data">

                    <div class="main-heading"><?php echo $therapist_data['heading'] ?></div>
                    <?php foreach($therapist_data['therapist_profile'] as $therapist){
                        $data = get_field("therapist_details", $therapist->ID);
                        $banner = get_field("banner_block", $therapist->ID);

                    ?>
                    <div class="wrap-profile-data">
                        <a href="<?php echo $therapist->guid ?>">
                        <div class="profile">
                        <div class="line-top"></div>
                             <img src="<?php echo $banner['banner_image']['sizes']['medium'] ?>" alt="">
                            <div class="wrap-details">
                                <div class="wrap-title"> <h5 class="name"><?php echo $data['therapist_name'] ?></h5></div>
                                <div class="work-as"><?php echo $data['work_as'] ?></div>
                            </div>
                            <div class="line-bottom"></div>
                        </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
          </div>
    </div>

        <div class="wellness-blog-block">

	<div class="block-wrap">
		<div class="wellness-blog_post">

            <div class="wrap-heading"><h2 class="heading">View More Articles</h2></div>
            <div class="sub_heading">Check out some of our latest articles below!</div>
            <div class="wrap-wellness-blogs-post">
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
                $button = get_field("button", $post->ID);

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
                                        $content = get_the_content();
                                        echo substr($content, 0, 110). ' ';
                                    ?>
                                    </div>
                        <div class="btn-wrap">
							<div class="shadow"></div>
                            <a class="button" href="<?php echo get_site_url() . "/wellness//" . $post->post_name ?>"><?php echo $button ?></a>
                        </div>
					</div>

				</div>

			<?php } ?>
            </div>
            <div class="wrap-btn">
                    <div class="btn-wrap">
                        <div class="shadow"></div>
                        <a class="button" href="/all-blogs/">See our All Blogs</a>
                    </div>
            </div>

		</div>
		<?php } ?>
	</div>

</div>


    </div>

</div>





<?php get_footer();?>
