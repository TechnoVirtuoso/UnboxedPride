<section class="heading-text-block">
    <div class="wrap-heading-text">
        <div class="container">
            <img class="bg_image" src="<?php echo $block['background_image']['url'] ?>" alt="">
            <div class="content-block">
                <div class="wrap-heading">
                    <h1 class="heading <?php if($block['full_stop'] == "purple") { echo "purple"; } ?>" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['heading'] ?><span class="<?php if($block['full_stop'] == "purple") { echo "purple"; } ?>">.</span></h1>
                </div>
                <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['text'] ?></div>
            </div>
        </div>
    </div>
</section>
