<section class="unboxed-block">
    <div class="wrap-unboxed-block">
        <div class="container" style="background-image:url(<?php echo $block['bg_image']['url'] ?>)">
            <div class="content-block" >
                <div class="inner-left">
                <div class="content">
                    <h2 class="heading"><?php echo $block['heading'] ?></h2>
                    <div class="text" data-aos="fade-up" data-aos-duration="1500"><?php echo $block['text'] ?></div>
                    <?php if($block['choose_type'] == 'image'){ ?>
                        <?php if($block['image']){ ?>
                            <div class="img-wrap-mobile">
                                <img src="<?php echo $block['image']['url'] ?>" alt="">
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if($block['video']) { ?>
                            <!-- <div class="video-wrap-mobile">
                                <video width="100%" height="100%"  playsinline muted autoplay loop>
                                    <source src="<?php echo $block['video']['url'] ?>" type="video/mp4">
                                    <source src="<?php echo $block['video']['url'] ?>" type="video/ogg">
                                </video>
                            </div> -->
                            <div id="video-container" class="mobile-video">
                                  <img src="/wp-content/uploads/2023/02/image-2.png" id="play-button">
                                  <div class="play-btn" id="icon-to-play">
                                  <svg data-v-dbc00af0="" width="70" height="70" xmlns="http://www.w3.org/2000/svg" class="video-embed-responsive__play-icon">
                                    <g data-v-dbc00af0="" fill="none" fill-rule="evenodd"><circle data-v-dbc00af0="" fill="#8A6FB3" cx="35" cy="35" r="35"></circle>
                                    <path data-v-dbc00af0="" d="M46.064 33.794l-14.166-8.526c-1.167-.697-2.898 0-2.898 1.68V44c0 1.557 1.61 2.5 2.898 1.721l14.166-8.525c1.248-.78 1.248-2.624 0-3.402z" fill="#FFF" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                  </div>

                            </div>
                        <?php } ?>
                    <?php } ?>
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
                <div class="inner-right">
                    <?php if($block['choose_type'] == 'image'){ ?>
                        <?php if($block['image']){ ?>
                            <div class="img-wrap">
                                <div class="image-wrap">
                                    <img src="<?php echo $block['image']['url'] ?>" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if($block['video']) { ?>
                            <?php ?>
                            <div id="video-containers">
                                  <img src="/wp-content/uploads/2023/02/image-2.png" id="play-button">
                                  <div class="play-btn" id="icon-to-plays">
                                  <svg data-v-dbc00af0="" width="70" height="70" xmlns="http://www.w3.org/2000/svg" class="video-embed-responsive__play-icon">
                                    <g data-v-dbc00af0="" fill="none" fill-rule="evenodd"><circle data-v-dbc00af0="" fill="#8A6FB3" cx="35" cy="35" r="35"></circle>
                                    <path data-v-dbc00af0="" d="M46.064 33.794l-14.166-8.526c-1.167-.697-2.898 0-2.898 1.68V44c0 1.557 1.61 2.5 2.898 1.721l14.166-8.525c1.248-.78 1.248-2.624 0-3.402z" fill="#FFF" fill-rule="nonzero"></path>
                                    </g>
                                </svg>
                                  </div>

                            </div>
                            <!-- <div class="video-wrap">
                                <video width="100%" height="100%" playsinline muted autoplay loop>
                                    <source src="<?php echo $block['video']['url'] ?>" type="video/mp4">
                                    <source src="<?php echo $block['video']['url'] ?>" type="video/ogg">
                                </video>
                            </div> -->
                            <!-- <iframe src="https://www.youtube.com/embed/qby0wVM_n6I?rel=0&amp;autoplay=1&mute=0" width="100%" height="100%"  frameborder="0" allow="accelerometer; autoplay; modestbranding; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <?php } else{ ?>
                            <div class="video-wrap">
                                <div class="embed"><?php echo $block['video_soure'] ?></div>
                            </div>
                    <?php }
                 } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  var videoContainers = document.getElementById("video-containers");
  var playButtons = document.getElementById("icon-to-plays");

  playButtons.addEventListener("click", function() {
    videoContainers.innerHTML = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/qby0wVM_n6I??autoplay=1" frameborder="0" allowfullscreen></iframe>';
  });

  var videoContainer = document.getElementById("video-container");
  var playButton = document.getElementById("icon-to-play");
  playButton.addEventListener("click", function() {
    videoContainer.innerHTML = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/qby0wVM_n6I??autoplay=1" frameborder="0" allowfullscreen></iframe>';
  });

</script>

