<section class="team-help-text-section">
    <div class="wrap-team-help-text">
        <div class="container">
            <div class="wrap-heading-block">
                <h2 class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['heading'] ?></h2>
                <p class="text"><?php echo $block['text'] ?></p>
            </div>
            <?php foreach($block['content_details'] as $column ){ ?>
                <div class="two-column-block">
                        <div class="inner-block">
                            <div class="wrap-content-details">
                                 <div class="text"  data-aos="fade-right" data-aos-duration="1500"><?php echo $column['content'] ?></div>
                                    <div class="btn-wrap">
                                        <div class="shadow"></div>
                                        <a class="button" href="<?php echo $column['button']['url'] ?>"><?php echo $column['button']['title'] ?>
                                        </a>
                                    </div>
                            </div>
                        </div>

                    <div class="inner-block">
                        <div class="text" data-aos="fade-left" data-aos-duration="1500"><?php echo $column['list_content'] ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
