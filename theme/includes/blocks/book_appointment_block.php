<section class="book-appoinment-block">
    <div class="wrap-appoinment-block">
        <div class="container">
            <?php if($block['show_back_button']){ ?>
                <a href="/therapist/" class="back-to-page">
                    <svg width="18" height="31" viewBox="0 0 18 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.6929 30.8358C14.0596 30.7017 13.6046 30.2885 13.1625 29.8284C9.16287 25.6621 5.15675 21.5025 1.14983 17.3437C0.518979 16.6891 0.254377 15.9281 0.559314 15.0372C0.669027 14.7153 0.872318 14.4002 1.10546 14.1571C5.22209 9.86261 9.34922 5.57729 13.4771 1.29364C14.1023 0.644095 14.8526 0.422831 15.6891 0.748022C16.4749 1.05226 16.921 1.6775 17.0033 2.54831C17.0702 3.25149 16.7992 3.83064 16.3248 4.32094C15.3713 5.30657 14.4218 6.29639 13.4707 7.2837C10.8449 10.011 8.21982 12.7382 5.59318 15.4655C5.51977 15.5417 5.43587 15.6063 5.25033 15.7705C5.39392 15.8552 5.5117 15.8946 5.58995 15.975C9.16287 19.6804 12.7309 23.3899 16.3022 27.0978C16.9137 27.7331 17.1759 28.4698 16.9105 29.3515C16.7016 30.0463 16.2514 30.5064 15.581 30.7293C15.4738 30.7646 15.3673 30.8006 15.2608 30.8366C15.0712 30.8358 14.8824 30.8358 14.6929 30.8358Z" fill="#A699F5"/>
                    </svg>
                    Back To Therapists
                </a>
            <?php } ?>
            <div class="content-block <?php if($block['reverse_block']) { ?> reverse <?php } ?>">
                    <div class="heading-block" data-aos="fade-right" data-aos-duration="1500">
                       <div class="wrap-heading"> <div class="heading <?php if($block['full_stop'] == "purple") { echo "purple"; } ?>"><?php echo $block['heading'] ?> <span class="<?php if($block['full_stop'] == "purple") { echo "purple"; } ?>">.</span></div></div>
                    </div>
                    <div class="text-block" data-aos="fade-left" data-aos-duration="1500">
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
