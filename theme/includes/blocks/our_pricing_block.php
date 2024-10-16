<?php

$session_rows = $block['session_row'];
$pricing_rows = $block['pricing_row'];

?>

<section class="pricing-block">
    <div class="wrap-pricing-block">
        <div class="container">
        <?php if($block['hide_heading']){ ?>

            <?php }else{ ?>
        <div class="wrap-heading">
            <h2 class="main-heading">
                <?php echo $block['main_heading'] ?>
            </h2>
        </div>
        <?php } ?>
            <div class="content-block">

                <div class="left-session-row">
                <div class="session-title empty"><div class="span">&nbsp;</div></div>
                    <?php foreach($session_rows as $session){ ?>
                        <div class="session-title"><div class="span"><?php echo $session['session_title'] ?></div></div>
                    <?php } ?>
                </div>

                    <div class="pricing-row" data-aos="fade-up" data-aos-duration="1500">
                        <?php
                        $i= 0;
                        foreach($pricing_rows as $row){
                            $i++;
                            ?>
                                <div class="wrap-table-price item-<?php echo $i ?>">
                                    <div class="pricing-title"><?php echo $row['pricing_title'] ?></div>
                                    <div class="price-box"><?php echo $row['price_box1'] ?><div class="session-title-mob"><?php echo $row['session_title_mob1'] ?> </div></div>
                                    <div class="price-box"><?php echo $row['price_box2'] ?><div class="session-title-mob"><?php echo $row['session_title_mob_2'] ?> </div></div>

                                </div>
                        <?php } ?>
                    </div>


            </div>
            <?php if($block['button']){ ?>
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
