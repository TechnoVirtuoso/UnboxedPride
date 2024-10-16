
<?php get_header(); ?>

<?php

$details = get_field("therapist_details",$post->ID);
$post_data = get_field("banner_block",$post->ID);
$heading_block = get_field("heading_block",$post->ID);
$experience = get_field("experience_block",$post->ID);
$tips = get_field("tips_details_block",$post->ID);

$terms = get_the_terms($post->ID,"text_filter");

?>



<?php if($post_data['banner_image']){ ?>
<section class="therapist-banner">
    <div class="wrap-therapist-banner">
         <div class="container">
            <?php if($post_data['banner_image']){ ?>
            <div class="image-block">
                <img data-aos="fade-right" data-aos-duration="1500" src="<?php echo $post_data['banner_image']['url'] ?>" alt="">
                <a href="/therapist/" class="back-to-page">
                    <svg width="18" height="31" viewBox="0 0 18 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6929 30.8358C14.0596 30.7017 13.6046 30.2885 13.1625 29.8284C9.16287 25.6621 5.15675 21.5025 1.14983 17.3437C0.518979 16.6891 0.254377 15.9281 0.559314 15.0372C0.669027 14.7153 0.872318 14.4002 1.10546 14.1571C5.22209 9.86261 9.34922 5.57729 13.4771 1.29364C14.1023 0.644095 14.8526 0.422831 15.6891 0.748022C16.4749 1.05226 16.921 1.6775 17.0033 2.54831C17.0702 3.25149 16.7992 3.83064 16.3248 4.32094C15.3713 5.30657 14.4218 6.29639 13.4707 7.2837C10.8449 10.011 8.21982 12.7382 5.59318 15.4655C5.51977 15.5417 5.43587 15.6063 5.25033 15.7705C5.39392 15.8552 5.5117 15.8946 5.58995 15.975C9.16287 19.6804 12.7309 23.3899 16.3022 27.0978C16.9137 27.7331 17.1759 28.4698 16.9105 29.3515C16.7016 30.0463 16.2514 30.5064 15.581 30.7293C15.4738 30.7646 15.3673 30.8006 15.2608 30.8366C15.0712 30.8358 14.8824 30.8358 14.6929 30.8358Z" fill="#A699F5"/>
                    </svg>
                    Back To Therapists
                </a>
            </div>
            <?php } ?>
            <div class="content-block">
                <div class="wrap-content">
                    <div class="heading-wrap" data-aos="fade-left" data-aos-duration="1500">
                        <h1 class="heading"><?php echo $post_data['heading'] ?></h1>
                        <div class="sub-heading"><?php echo $details['work_as'] ?></div>
                    </div>

                         <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $post_data['text'] ?></div>
                         <?php if($post_data['icon_box']){ ?>
                         <div class="wrap-icons" >

                            <?php foreach($post_data['icon_box'] as $box){ ?>
                                <div class="icon-box" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="<?php echo $box['icon']['url'] ?>" alt="">
                                    <p class="text"><?php echo $box['text'] ?></p>
                                </div>
                            <?php } ?>

                         </div>
                         <?php } ?>
                </div>

            <?php if($post_data['buttons']){ ?>
                <div class="wrap-button-block">
                    <?php foreach($post_data['buttons'] as $button){ ?>
                        <div class="btn-wrap">
                            <div class="shadow"></div>
                            <a class="button" href="<?php echo $button['button']['url'] ?>"><?php echo $button['button']['title'] ?>
                            <div class="arrow">
                                <svg width="67" height="23" viewBox="0 0 67 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.16602 10.2783C1.33759 10.2783 0.666016 10.9499 0.666016 11.7783C0.666016 12.6067 1.33759 13.2783 2.16602 13.2783V10.2783ZM66.4103 12.839C66.9961 12.2532 66.9961 11.3034 66.4103 10.7177L56.8643 1.17172C56.2785 0.585932 55.3288 0.585932 54.743 1.17172C54.1572 1.75751 54.1572 2.70725 54.743 3.29304L63.2283 11.7783L54.743 20.2636C54.1572 20.8494 54.1572 21.7991 54.743 22.3849C55.3288 22.9707 56.2785 22.9707 56.8643 22.3849L66.4103 12.839ZM2.16602 13.2783H65.3496V10.2783H2.16602V13.2783Z" fill="black"/>
                                </svg>
                            </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
         </div>
    </div>
</section>
<?php } ?>

<?php if($heading_block['heading']){ ?>
<section class="heading-text-section">
    <div class="wrap-heading-text">
        <div class="container">
            <div class="heading-block" data-aos="fade-up" data-aos-duration="1500">
                <h2 class="main-heading"><?php echo $heading_block['heading'] ?></h2>
            </div>
            <div class="text-block" data-aos="fade-up" data-aos-duration="1500">
                <p class="text"><?php echo $heading_block['text'] ?></p>
            </div>
        </div>
    </div>
    <div class="icon-box-block">
        <div class="container">

            <div class="wrap-icon-box">
                <?php if($heading_block['icon_box']){ ?>
                         <div class="wrap-icons">
                         <!-- <?php foreach($terms as $term){
                            $image = get_field('image', $term);

                            ?>
                            <div class="icon-box" data-aos="fade-right" data-aos-duration="1500">
                                    <img src="<?php echo $image['url'] ?>" alt="">
                                    <p class="text"><?php echo $term->name ?></p>
                                </div>
                        <?php } ?> -->
                            <?php foreach($heading_block['icon_box'] as $box){ ?>
                                <div class="icon-box" data-aos="fade-right" data-aos-duration="1500">
                                    <img src="<?php echo $box['icon']['url'] ?>" alt="">
                                    <p class="text"><?php echo $box['text'] ?></p>
                                </div>
                            <?php } ?>
                         </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>



<?php if($experience['heading']){ ?>
<section class="area-experience-block">
    <div class="wrap-experience-block">
        <div class="wrap-container">
            <div class="container">
                <div class="text-block">
                    <div class="content-wrap">
                        <h2 class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $experience['heading'] ?></h2>
                        <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $experience['text'] ?></div>
                    </div>
                </div>
                <div class="image-block" data-aos="fade-left" data-aos-duration="1500">
                    <img src="<?php echo $experience['image']['url'] ?>" alt="">
                </div>
            </div>
            <div class="button-wrap">

                <div class="btn-wrap">
                    <div class="shadow"></div>
                    <a class="button" href="<?php echo $experience['button']['url'] ?>"><?php echo $experience['button']['title'] ?>
                    <div class="arrow">
                        <svg width="67" height="23" viewBox="0 0 67 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.16602 10.2783C1.33759 10.2783 0.666016 10.9499 0.666016 11.7783C0.666016 12.6067 1.33759 13.2783 2.16602 13.2783V10.2783ZM66.4103 12.839C66.9961 12.2532 66.9961 11.3034 66.4103 10.7177L56.8643 1.17172C56.2785 0.585932 55.3288 0.585932 54.743 1.17172C54.1572 1.75751 54.1572 2.70725 54.743 3.29304L63.2283 11.7783L54.743 20.2636C54.1572 20.8494 54.1572 21.7991 54.743 22.3849C55.3288 22.9707 56.2785 22.9707 56.8643 22.3849L66.4103 12.839ZM2.16602 13.2783H65.3496V10.2783H2.16602V13.2783Z" fill="black"/>
                        </svg>
                    </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php if($tips['heading']){ ?>
<section class="tips-column-section">
    <div class="wrap-tips-section">
        <div class="container">
            <div class="image-heading-block">
            <h2 class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $tips['heading'] ?></h2>
            <div class="image" data-aos="fade-up" data-aos-duration="1500"><img src="<?php echo $tips['image']['url'] ?>" alt=""></div>
            </div>
            <div class="text-button-block">
            <div class="text" data-aos="fade-left" data-aos-duration="1500"><?php echo $tips['text'] ?></div>
                <div class="btn-wrap">
                    <div class="shadow"></div>
                    <a class="button" href="<?php echo $tips['button']['url'] ?>"><?php echo $tips['button']['title'] ?>
                    <div class="arrow">
                        <svg width="67" height="23" viewBox="0 0 67 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.16602 10.2783C1.33759 10.2783 0.666016 10.9499 0.666016 11.7783C0.666016 12.6067 1.33759 13.2783 2.16602 13.2783V10.2783ZM66.4103 12.839C66.9961 12.2532 66.9961 11.3034 66.4103 10.7177L56.8643 1.17172C56.2785 0.585932 55.3288 0.585932 54.743 1.17172C54.1572 1.75751 54.1572 2.70725 54.743 3.29304L63.2283 11.7783L54.743 20.2636C54.1572 20.8494 54.1572 21.7991 54.743 22.3849C55.3288 22.9707 56.2785 22.9707 56.8643 22.3849L66.4103 12.839ZM2.16602 13.2783H65.3496V10.2783H2.16602V13.2783Z" fill="black"/>
                        </svg>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php get_blocks();?>
<?php get_footer();?>
