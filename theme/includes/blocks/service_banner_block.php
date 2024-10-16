  <section class="service-banner">
    <div class="wrap-service-banner" style="background-image:url(<?php echo $block['background_image']['url'] ?>)">

    <div class="overlay <?php if($block['overlay'] == "purple") { echo "purple"; } elseif($block['overlay'] == "yellow") { echo "yellow"; } elseif($block['overlay'] == "green"){ echo "green";} ?>"></div>
         <div class="container">
            <div class="content-block">
               <div class="wrap-heading <?php if($block['full_width_line']){ echo "line_full";} ?>"><h1 class="heading <?php if($block['text_color'] == "black") { echo "black"; } elseif($block['text_color'] == "white") { echo "white"; }?> "><?php echo $block['heading'] ?></h1></div>
                <div class="btn-wrap">
                    <div class="shadow"></div>
                    <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?></a>
                </div>
            </div>
         </div>
    </div>
  </section>
