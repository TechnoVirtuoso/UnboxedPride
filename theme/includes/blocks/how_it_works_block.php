<?php
$templatedir = get_template_directory_uri();
?>

<!-- <script src="<?php echo $templatedir . '/js/lottieplayers.js' ?>"></script> -->

<section class="how-it-works-block">
    <div class="wrap-how-it-works">
        <div class="container">
            <div class="main-heading">
               <h2 class="heading"><?php echo $block['main_heading'] ?></h2>
            </div>
            <div class="content-block" style="background-image:url(<?php echo $block['bg_image']['url'] ?>);">
                    <?php
                    $i = 0;
                    foreach($block['icon_box'] as $icon){
                        $i++;
                    ?>
                        <div class="icon-box">
                            <div class="wrap-img-count">
                                <div class="count"><?php echo $i ?></div>
                                <div class="img-wrap">
                                    <!-- <img src="<?php echo $icon['icon']['url'] ?>" alt=""> -->
                                    <lottie-player class="wrap-json-animation" src="<?php echo $icon['json'] ?>" background="white" speed="1" loop autoplay></lottie-player>
                                </div>
                            </div>
                            <div class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $icon['heading'] ?></div>
                            <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $icon['text'] ?></div>
                        </div>
                    <?php } ?>
            </div>
            <div class="wrap-btn">
                    <div class="btn-wrap">
                        <div class="shadow"></div>
                        <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section>


