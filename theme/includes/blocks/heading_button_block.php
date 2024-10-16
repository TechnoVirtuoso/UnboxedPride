<section class="heading-button-section">
    <div class="wrap-heading-button">
    <img class="bg_image" src="<?php echo $block['background_image']['url'] ?>" alt="">
        <div class="container">
            <div class="column">
                <div class="inner-column">
                    <div class="heading-content">
                        <h2 class="heading" data-aos="fade-right" data-aos-duration="1500"><?php echo $block['heading']?></h2>
                        <div class="text mobile" data-aos="fade-left" data-aos-duration="1500">
                             <?php echo $block['right_text']?>
                        </div>
                        <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['content']?></div>
                    </div>
                </div>
                <div class="inner-column">
                    <div class="text desktop" data-aos="fade-left" data-aos-duration="1500">
                         <?php echo $block['right_text']?>
                    </div>
                    <?php if($block['button_align']){?>
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
            <div class="wrap-btn <?php if($block['button_align']){ echo "hide"; } ?>">
                <div class="btn-wrap">
                    <div class="shadow"></div>
                    <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
