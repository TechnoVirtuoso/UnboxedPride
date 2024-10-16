<section class="about-blurb">
    <div class="container">
        <div class="content-wrap">
            <h2 class="heading"><?php echo $block['heading'] ?></h2>
            <span class="text" data-aos="fade-up" data-aos-duration="1200"><?php echo $block['content'] ?></span>
        </div>
                <div class="img-wrap <?php if($block['enable']){ echo 'active-imgline'; } ?>">
        <?php if ($block['choose'] == "image"){  ?>
            <img  data-aos="fade-left" data-aos-duration="1500" src="<?php echo $block['image'] ?>" alt="">
        <?php } elseif($block['choose'] == "video"){ ?>
                <video  data-aos="fade-left" data-aos-duration="1500"  width="100%" muted autoplay>

                <source src="<?php echo $block['video'] ?>" type="video/mp4">
                </video>
                <?php } ?>

        </div>
    </div>
</section>
