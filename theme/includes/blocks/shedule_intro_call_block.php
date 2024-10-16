<section class="shedule-call-block">
    <div class="shedule-call-block">
        <div class="container">
            <div class="content-block">
                    <div class="heading-block">
                       <div class="wrap-heading"> <div class="heading <?php if($block['full_stop'] == "yellow") { echo "yellow"; } ?>"><?php echo $block['heading'] ?> <span class="<?php if($block['full_stop'] == "yellow") { echo "yellow"; } ?>">.</span></div></div>
                    </div>
                    <div class="text-block">
                        <div class="text-wrap">
                            <div class="text"><?php echo $block['text'] ?></div>
                        </div>
                        <div class="arrow-btn">
                            <div class="btn-wrap">
                            <div class="shadow"></div>
                            <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
                            <div class="arrow">
                                <svg width="67" height="23" viewBox="0 0 67 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.16602 10.2783C1.33759 10.2783 0.666016 10.9499 0.666016 11.7783C0.666016 12.6067 1.33759 13.2783 2.16602 13.2783V10.2783ZM66.4103 12.839C66.9961 12.2532 66.9961 11.3034 66.4103 10.7177L56.8643 1.17172C56.2785 0.585932 55.3288 0.585932 54.743 1.17172C54.1572 1.75751 54.1572 2.70725 54.743 3.29304L63.2283 11.7783L54.743 20.2636C54.1572 20.8494 54.1572 21.7991 54.743 22.3849C55.3288 22.9707 56.2785 22.9707 56.8643 22.3849L66.4103 12.839ZM2.16602 13.2783H65.3496V10.2783H2.16602V13.2783Z" fill="black"/>
                                </svg>
                            </div>
                            </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
