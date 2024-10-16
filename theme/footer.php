<?php 
$bg_image = get_field("background_image","option");
$content = get_field("content_block","option");
$nav_lists = get_field("nav_items","option");
$copyright = get_field("copyright_text","option");

?>
  
<footer class="main-footer">
    <div class="wrap-main-footer" style="background-image:url(<?php echo $bg_image['url'] ?>)">
        <div class="container">
           <div class="content-block">
            <div class="left-content">
                <div class="logo"><img src="<?php echo $content['logo']['url'] ?>" alt=""></div>
                <div class="wrap-social-icons">
                <?php foreach($content['social_icons'] as $icon){ ?>
                    <div class="social-icon"><img src="<?php echo $icon['icon']['url'] ?>" alt=""></div>
                <?php } ?>
                </div>
                <div class="contact-info-wrap">
                <?php foreach($content['contact_info'] as $info){ ?>
                    <div class="contact-info">
                        <img src="<?php echo $info['icon']['url'] ?>" alt="">
                        <p class="info"><?php echo $info['info'] ?></p>
                    </div>
                <?php } ?>
                </div>
                <div class="description">
                    <?php echo $content['description'] ?>
                </div>
                <div class="wrap-country-icons">
                <?php foreach($content['country_flags'] as $icon){ ?>
                    <div class="country-icon"><img src="<?php echo $icon['icon']['url'] ?>" alt=""></div>
                <?php } ?>
                </div>
            </div>
            <div class="navigation-block">
                <?php foreach($nav_lists as $nav){ ?>
                    <div class="nav-item">
                        <h4 class="nav-title"><?php echo $nav['nav_heading'] ?></h4>
                        <ul class="list-items">
                        <?php foreach($nav['nav_items'] as $nav_links){ ?>
                            <li class="list-item">
                                <a class="item" href="<?php echo $nav_links['nav_item']['url'] ?>"><?php echo $nav_links['nav_item']['title'] ?></a>
                        </li>
                        <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
           </div>
        </div>
    </div>
    <div class="copyright-block">
        <p class="text"><?php echo $copyright ?></p>
    </div>
</footer>

</div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
