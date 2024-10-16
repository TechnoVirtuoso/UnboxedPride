<section class="get-in-touch-block">
    <div class="wrap-get-in-touch-block">
        <div class="container" style="background-image:url(<?php echo $block['bg_image']['url'] ?>)">
            <div class="content-block">
                <div class="content-box">
                    <div class="wrap-content">
                    <h2 class="heading<?php if($block['heading_color']){ ?> black <?php } ?>"><?php echo $block['heading'] ?></h2>
                    <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['text'] ?></div>
                    </div>
                </div>
                <div class="btn-box">
					  <?php if($block['button']){ ?>
                    <div class="btn-wrap">
                        <div class="shadow"></div>
                        <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
                        </a>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
