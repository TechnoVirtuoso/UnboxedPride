
<div class="icon-block">
    <div class="main-heading"> <?php echo $block['main_heading'] ?> </div>
    <div class="wrap-icon-block">
        <?php foreach($block['icon_box'] as $icon){ ?>
        <div class="icon-box">
            <div class="img-wrap"><img src="<?php echo $icon['icon']['url'] ?>" alt=""></div>
            <h2 class="heading" data-aos="fade-up" data-aos-duration="1500"><?php echo $icon['heading'] ?></h2>
            <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $icon['text'] ?></div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="inner-right">
 
</div>