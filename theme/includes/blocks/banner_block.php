

<?php
$templatedir = get_template_directory_uri();
?>


<section class="banner-block" style="background-image:url(<?php echo $block['background_image']['url'] ?>)">

<div class="wrap-container-block">
    <div class="text-box">
        <div class="content-block">
            <h1 class="heading"><?php echo $block['heading'] ?></h1>
            <div class="gif-mobile mobile">
                    <!-- <img class="photo-pc" src="/wp-content/uploads/2022/12/mobile-image.png" alt=""> -->
                    <img class="gif-mobile" src="<?php echo $block['gif_mobile']['url'] ?>" alt="">
                    <img class="gif_layer_mobile" src="/wp-content/uploads/2022/12/Wave-For-box-mobile-and-tablet.gif" alt="">


            </div>
            <!-- <div class="gif-box mob">
                <?php if ($block['gif_mobile']) { ?>
                    <img class="gif-mob" src="<?php echo $block['gif_mobile']['url'] ?>" alt="">
                    <img class="gif_layer_mob" src="/wp-content/uploads/2022/11/mob-wave.gif" alt="">
                <?php } ?>
            </div> -->
            <div class="wrap-bottom-text">


            <p class="text"><?php echo $block['text'] ?></p>
            <div class="book-now-btn">
                <div class="shadow"></div>
                <a class="book-appoinment" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?></a>
            </div>
            </div>
            <h2 class="sub-heading">freedom comes from within <span class="dot">.</span></h2>
        </div>
    </div>
    <div class="gif-box">
        <!-- <img class="photo-pc" src="/wp-content/uploads/2022/12/box-image.png" alt=""> -->
        <img class="gif-pc" src="<?php echo $block['gif']['url'] ?>" alt="">
        <img class="gif_layer_2" src="/wp-content/uploads/2022/12/Wave-for-main-banner.gif" alt="">
        <!-- <img class="gif_layer_line" src="/wp-content/uploads/2022/12/Line-and-text.gif" alt=""> -->
        <div id="text-animation"></div>
        <!-- <lottie-player class="banner-aniamation" src="https://lottie.host/0596ef2c-79ab-4714-a19f-e00683b29f2c/AhM623ceaw.json" background="transparent" speed="1" autoplay>
        </lottie-player> -->
        <img class="gif-tablet" src="<?php echo $block['gif_tablet']['url'] ?>" alt="">
        <img class="gif_layer_tablet" src="/wp-content/uploads/2022/12/Wave-for-tablet.gif" alt="">
    </div>
</div>

</section>

<script src="<?php echo $templatedir . '/js/lottie.js' ?>"></script>
