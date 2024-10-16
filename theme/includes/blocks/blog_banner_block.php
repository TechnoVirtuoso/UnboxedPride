<section class="blog-banner">
    <div class="wrap-blog-banner">
         <div class="container">
            <div class="image-block">
                <img src="<?php echo $block['banner_image']['url'] ?>" alt="">
            </div>
            <div class="content-block">
                <div class="wrap-content">
                    <div class="heading-wrap">
                        <h1 class="heading"><?php echo $block['heading'] ?></h1>
                    </div>
                         <p class="text"><?php echo $block['text'] ?></p>
                         <div class="wrap-icons">
                            <?php if($block['icon_box']){?>
                                <?php foreach($block['icon_box'] as $box){ ?>
                                    <div class="icon-box">
                                        <img src="<?php echo $box['icon']['url'] ?>" alt="">
                                        <p class="text"><?php echo $box['text'] ?></p>
                                    </div>
                                <?php } ?>
                            <?php }?>
                         </div>

                </div>
            </div>
         </div>
    </div>
</section>
