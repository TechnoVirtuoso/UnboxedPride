<?php 

    

?>


<section class="therapist-banner-section <?php  if($block['type_2']){echo 'type_2';}?>"    >
    <div class="wrap-therapist-banner" style = "<?php if($block['type_2']) { echo "background-image: url('/wp-content/uploads/2023/07/Frame_35760.jpg')";} ?>"; >
        <div class="container">
            <div class="content-block">
               <div class="wrap-heading">
                    <h1 class="heading "><?php echo $block['heading'] ?></h1>
                </div>
                <?php if($block['title']){ ?>
                <div class="wrap_title">
                    <h2 class="title"><?php echo $block['title'] ?></h2>
                </div>
                
                <!-- <div class="line">
                    <img src="/wp-content/uploads/2023/07/line.svg" alt="">
                </div> -->
                <?php } ?>
            </div>
         </div>
    </div>
 </section>
