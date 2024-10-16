<section class="list-point-block">
    <div class="wrap-list-points">
        <div class="container">
            <div class="content-block">
            <?php foreach($block['list_points'] as $point){ ?>
                    <div class="list-points-wrap">
                        <h3 class="heading"><?php echo $point['heading'] ?></h3>
                        <div class="text"><?php echo $point['text'] ?></div>
                    </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
