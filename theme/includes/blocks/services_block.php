<section class="services-block">
    <div class="wrap-services-block">
        <div class="container">
            <h2 class="main-heading <?php if($block['full_stop'] == "yellow") { echo "yellow"; } ?>"><?php echo $block['heading'] ?><span class="<?php if($block['full_stop'] == "yellow") { echo "yellow"; } ?>">.</span></h2>
            <div class="text"><?php echo $block['text'] ?></div>
            <div class="content-block">
                <?php foreach($block['icon_box'] as $icon){ ?>
                <div class="icon-box <?php if($icon['invert_box']) echo 'reverse' ?>"  data-aos="fade-right" data-aos-duration="1500">
                    <div class="img-wrap"><img src="<?php echo $icon['icon']['url'] ?>" alt=""></div>
                    <div class="text-wrap">
                        <a class="heading" href="<?php echo $icon['heading']['url'] ?>"><?php echo $icon['heading']['title'] ?></a>
                        <div class="box-text"><?php echo $icon['text'] ?></div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php if($block['hide_button']){?>

            <?php }else{ ?>
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
</section>
