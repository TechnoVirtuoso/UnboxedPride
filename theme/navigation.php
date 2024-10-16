<?php
    $logo = get_field("logo","option");
    $menu = get_field("menu_items","option");
    $book = get_field("book_button","option");
    $login = get_field("login_button","option");
?>

<div class="top-bar">
    <a href="#" class="login">
        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-lock"><path data-v-76dd1efc="" fill="currentColor" d="M400 192h-32v-46.6C368 65.8 304 .2 224.4 0 144.8-.2 80 64.5 80 144v48H48c-26.5 0-48 21.5-48 48v224c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V240c0-26.5-21.5-48-48-48zm-272-48c0-52.9 43.1-96 96-96s96 43.1 96 96v48H128v-48zm272 320H48V240h352v224z" class=""></path></svg> Log in or register</a> <!----> <!----></div>
 <header class="main-header">
    <div class="wrap-header">
        <div class="navigation">
            <div class="logo-wrap">
            <div class="logo">
            <a href="<?php echo get_site_url();?>">
                <img src="<?php echo $logo['url'] ?>" alt="">
            </a>
            </div>
            </div>
            <div class="menu-wrap">
            <div class="menu-items">
                <?php foreach($menu as $menu_item){
                     if ($menu_item['choose_type'] == "normal"){  ?>
                        <div class="item-list"><a class="item" href="<?php echo $menu_item['item']['url'] ?>"><?php echo $menu_item['item']['title'] ?></a></div>
                    <?php } elseif($menu_item['choose_type'] == "dropdown"){ ?>
                        <div class="item-list dropdown">
                        <a class="item"><?php echo $menu_item['item']['title']?>
                        <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7893 1.21365C15.7212 1.53549 15.5112 1.76672 15.2773 1.99139C13.16 4.02408 11.046 6.06004 8.93244 8.09642C8.59978 8.41703 8.21302 8.5515 7.76024 8.39653C7.59667 8.34077 7.43652 8.23746 7.31299 8.11897C5.13044 6.02684 2.95258 3.92937 0.775568 1.83149C0.44546 1.51376 0.33301 1.13248 0.498277 0.707325C0.652896 0.308003 0.970652 0.0812832 1.41321 0.0394651C1.77058 0.00543664 2.06491 0.14319 2.31409 0.38426C2.815 0.868858 3.31804 1.35141 3.81981 1.83477C5.20584 3.16926 6.59187 4.50334 7.9779 5.83824C8.01666 5.87555 8.04946 5.91819 8.13294 6.01249C8.17596 5.93951 8.19598 5.87965 8.23687 5.83988C10.12 4.02408 12.0052 2.21073 13.8896 0.395739C14.2125 0.084973 14.5869 -0.0482709 15.035 0.086613C15.3881 0.192798 15.6219 0.421568 15.7352 0.762263C15.7531 0.81679 15.7714 0.870908 15.7898 0.925025C15.7893 1.02137 15.7893 1.11731 15.7893 1.21365Z" fill="#A699F5"/>
                        </svg>
                        </a>
                        <div class="sub-menu-wrap <?php if($menu_item['mega_menu']){ echo "mega-menu"; } ?>">
                            <?php foreach($menu_item['sub_items'] as $dropdown){ ?>
                                <div class="sub-menu-item">
                                    <a href="<?php echo $dropdown['item']['url'] ?>"><?php echo $dropdown['item']['title'] ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
            </div>
                <div class="wrap-buttons">
                <?php if($book){ ?>
                <div class="book-now-btn">
                    <div class="shadow"></div>
                    <a class="book-appoinment" href="<?php echo $book['url'] ?>"><?php echo $book['title'] ?></a>
                </div>
                <?php } ?>
                <?php if($login){ ?>
                <div class="book-now-btn login">
                    <div class="shadow"></div>
                    <a class="book-appoinment" href="<?php echo $login['url'] ?>"><?php echo $login['title'] ?></a>
                </div>
                <?php } ?>
                </div>
            </div>

            <div class="wrap-mobile-menu">
            <?php if($book){ ?>
            <div class="login-btn">
                <div class="shadow"></div>
                <a class="login" href="<?php echo $book['url'] ?>"><?php echo $book['title'] ?></a>
            </div>
            <?php } ?>
            <div class="hamburger-menu-icon">
                <div class="hamburger-icon">
                <svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="3" fill="#1E1D32"></rect>
                    <rect y="13" width="40" height="3" fill="#1E1D32"></rect>
                    <rect y="26" width="40" height="3" fill="#1E1D32"></rect>
                </svg>
                </div>
                <div class="close-icon">
                <svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 5L31 26.9372Z" fill="black"/>
                <path d="M10 5L31 26.9372" stroke="black" stroke-width="3.23162" stroke-linecap="round"/>
                <path d="M10 26.9372L31 5Z" fill="black"/>
                <path d="M10 26.9372L31 5" stroke="black" stroke-width="3.23162" stroke-linecap="round"/>
                </svg>
                </div>
          </div>
            </div>

        </div>

        <div class="mobile-navigation">
            <div class="mobile-menu">
            <div class="menu-items">
            <?php foreach($menu as $menu_item){
                     if ($menu_item['choose_type'] == "normal"){  ?>
                        <div class="item-list"><a class="item" href="<?php echo $menu_item['item']['url'] ?>"><?php echo $menu_item['item']['title'] ?></a></div>
                    <?php } elseif($menu_item['choose_type'] == "dropdown"){ ?>
                        <div class="item-list dropdown">
                        <a class="item"><?php echo $menu_item['item']['title']?>
                        <svg width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.7893 1.21365C15.7212 1.53549 15.5112 1.76672 15.2773 1.99139C13.16 4.02408 11.046 6.06004 8.93244 8.09642C8.59978 8.41703 8.21302 8.5515 7.76024 8.39653C7.59667 8.34077 7.43652 8.23746 7.31299 8.11897C5.13044 6.02684 2.95258 3.92937 0.775568 1.83149C0.44546 1.51376 0.33301 1.13248 0.498277 0.707325C0.652896 0.308003 0.970652 0.0812832 1.41321 0.0394651C1.77058 0.00543664 2.06491 0.14319 2.31409 0.38426C2.815 0.868858 3.31804 1.35141 3.81981 1.83477C5.20584 3.16926 6.59187 4.50334 7.9779 5.83824C8.01666 5.87555 8.04946 5.91819 8.13294 6.01249C8.17596 5.93951 8.19598 5.87965 8.23687 5.83988C10.12 4.02408 12.0052 2.21073 13.8896 0.395739C14.2125 0.084973 14.5869 -0.0482709 15.035 0.086613C15.3881 0.192798 15.6219 0.421568 15.7352 0.762263C15.7531 0.81679 15.7714 0.870908 15.7898 0.925025C15.7893 1.02137 15.7893 1.11731 15.7893 1.21365Z" fill="#A699F5"/>
                        </svg>
                        </a>
                        <div class="sub-menu-wrap">
                            <?php foreach($menu_item['sub_items'] as $dropdown){ ?>
                                <div class="sub-menu-item">
                                    <a href="<?php echo $dropdown['item']['url'] ?>"><?php echo $dropdown['item']['title'] ?>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                <?php } ?>
                </div>
            </div>
            <?php if($login){ ?>
            <div class="book-now-btn">
                <div class="shadow"></div>
                <a class="book-appoinment" href="<?php echo $login['url'] ?>"><?php echo $login['title'] ?></a>
            </div>
            <?php } ?>
            <?php if($book){ ?>
            <div class="book-now-btn book">
                <div class="shadow"></div>
                <a class="book-appoinment" href="<?php echo $book['url'] ?>"><?php echo $book['title'] ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
 </header>

 <script>

    $(".hamburger-menu-icon").click(function () {
        $(this).toggleClass("active");
        $(".mobile-navigation").toggleClass("active");
    })




 </script>
