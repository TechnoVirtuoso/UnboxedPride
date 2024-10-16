<section class="roadmap-block">
    <div class="wrap-roadmap-block">
        <div class="container">
            <div class="content-block">
                <h2 class="main-heading"><?php echo $block['main_heading'] ?></h2>
                <div class="wrap-icon-box">
                    <?php foreach($block['icon_box'] as $box){ ?>
                        <div class="icon-box" data-aos="fade-left" data-aos-duration="1300">
                            <div class="wrap-img"><img src="<?php echo $box['image']['url'] ?>" alt=""></div>
                            <div class="content-box">
                                <div class="line"></div>
                                <div class="text-block">
                                    <h2 class="heading"><?php echo $box['heading'] ?></h2>
                                    <p class="text"><?php echo $box['text'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div> 
</section>
