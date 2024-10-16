<section class="logos-block">
    <div class="wrap-logo-block">
        <div class="container">
            <div class="wrap-logos">
                <?php foreach($block['logos'] as $logo) { ?>
                <div class="logo" data-aos="fade-right" data-aos-duration="1500">
                    <img src="<?php echo $logo['logo']['url'] ?>" alt="">
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
