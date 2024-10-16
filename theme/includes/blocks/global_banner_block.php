 <section class="global-banner-section">
    <div class="wrap-global-banner" style="background-image:url(<?php echo $block['background_image']['url'] ?>)">
        <div class="container">
            <div class="content-block <?php if($block['heading_line']){ echo "full_width";} ?>">
               <div class="wrap-heading">
                    <h1 class="heading <?php if($block['heading_line']){ echo "line";} ?>"><?php echo $block['heading'] ?><span class="<?php if($block['full_stop'] == "purple") { echo "purple"; } ?>">.</span></h1>
                </div>
                <?php if($block['show_text']){ ?>
                    <p class="text"><?php echo $block['text'] ?></p>
                <?php } ?>
            </div>
         </div>
    </div>
 </section>
