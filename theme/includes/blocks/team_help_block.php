<section class="team-help-section">
    <div class="wrap-team-help">
        <div class="container">
            <div class="wrap-heading-block">
                <h2 class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['heading'] ?></h2>
                <p class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['text'] ?></p>
            </div>
            <?php foreach($block['two_column'] as $column ){ ?>
                <div class="two-column-block <?php if($column['reverse_column']){ echo "reverse"; } ?>">
                    <div class="content-block <?php if($column['remove_heading']){ echo "center";} ?>">
                        <div class="wrap-content">
                        <?php if($column['remove_heading']){?>
                        <?php } else{ ?>
                            <h2 class="heading <?php if($column['1_line_heading']){ echo "single_line"; } ?>" data-aos="fade-right" data-aos-duration="1500"><?php echo $column['heading'] ?><div class="line"></div></h2>
                        <?php } ?>
                            <div class="text <?php if($column['remove_heading']){ echo "bullet_points";} ?>" data-aos="fade-up" data-aos-duration="1500"><?php echo $column['text'] ?> <?php if($column['remove_heading']){ ?> <div class="line"></div> <?php } ?> </div>
                        </div>
                    </div>
                    <div class="image-block" data-aos="fade-left" data-aos-duration="1500">
                        <img src="<?php echo $column['image']['url'] ?>" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
