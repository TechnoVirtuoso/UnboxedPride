<?php if ( !$block['type_2']) { ?>
  

  <section class="therapist-team-block">
      <div class="wrap-therapist-team-block">
  
          <div class="container">
              <div class="content-block">
                  <div class="wrap-content">
                     <h2 class="main-heading"><?php echo $block['heading'] ?></h2>
                  </div>
  
                  <div class="wrap-filter-button">
                      <div class="title">
                              Telehealth Therapists
                      </div>
                      <div id="show_hide_filter" class="filter-btn">
                          <div class="shadow"></div>
                          <span class="book-appoinment">Hide Filters</span>
                      </div>
                  </div>
                  <div class="wrap-data">
                      <div class="sidebar active"><?php echo do_shortcode( '[searchandfilter id="839"]' ); ?></div>
                      <div class="data">
                          <?php echo do_shortcode('[searchandfilter id="839" show="results"]') ?>
                      </div>
                  </div>
  
              </div>
          </div>
      </div>
  </section>
  
  <?php } else { ?>
      <section class= "therapist-team-block type_2" >
      <div class="wrap-therapist-team-block">
  
          <div class="search_filter">
              <div class="desktop_filter">
                  <?php echo do_shortcode( '[searchandfilter id="1331"]' ); ?>
              </div>
              <div class="search_btn">
                  <button class="filter">Filters <img src="/wp-content/uploads/2023/07/filter.svg" alt=""> </button>
                  <!-- <button class="reset_btn"><img src="/wp-content/uploads/2023/07/Vector.svg" alt="">Reset filters</button> -->
              </div>
              <div class="mob_filter">
                  <div class="close_btn">
                      <button class="close"><img src="/wp-content/uploads/2023/07/Vector-1.svg" alt=""> Close</button>
                  </div>
                  <div class="filter_form">
                  <?php
               echo do_shortcode( '[searchandfilter id="839"]' );
                ?>
               
                <div class="submit_btn">
                      <button>Submit <img src="/wp-content/uploads/2023/07/arrow-right.svg" alt=""><button>
                  </div>
  
                  </div>
             
              
              </div>
          </div>
          <div class="search_result">
              <div class="desktop_result">
                  <?php echo do_shortcode('[searchandfilter id="1331" show="results"]') ?>
              </div>
              <div class="mob_result">
              <?php echo do_shortcode('[searchandfilter id="839" show="results"]') ?>
              </div>
          </div>
      </div>
  
  </section>
  
  <?php } ?>
  
  
  
  
  <script>
  
         const queryString = window.location.search;
         const urlParams = new URLSearchParams(queryString);
         $(document).ready(function(){
              const category = urlParams.get('category');
              console.log(category);
              if(category){
                  $(".category-title").removeClass("active");
                  $(".wrap-therapist-team .member-block").removeClass("all");
                  $(".category-title.tab-"+category).addClass("active");
                  $(".wrap-therapist-team").removeClass("active");
                  $(".wrap-therapist-team .member-block."+category).addClass("active");
  
              }
         })
  
         var img = $('<img>', {
      src: '/wp-content/uploads/2023/07/arrow-right-1.svg',
      alt: 'Image description',
      class: 'arrow-right'
    });
  
    // Append the img element to a container (e.g., body)
  //   $('.sf-field-submit').append(img);
  
  
  
    $(".close_btn").click(function(){
      $(".mob_filter").hide();
      $('body').css('overflow', '');
    })
    $(".filter").click(function(){
      $(".mob_filter").show();
      $('body').css('overflow', 'hidden');
    })
    
    $(".submit_btn").click(function() {
    $(".sf-field-submit input").click();
    $('body').css('overflow', '');
    $(".mob_filter").hide();
  
  });
  
  
  
  
  let element = $(".mob_filter .sf-field-reset").html()
  $('.search_btn').append(element);
  $('.search_btn .search-filter-reset').empty();;
  $('.search_btn .search-filter-reset').addClass("reset_btn");
  var img = $('<img>', {
      src: '/wp-content/uploads/2023/07/Vector.svg',
      alt: 'cross'
    });
  
    // Append the img element to the anchor tag
  //   $('.reset_btn').append(img);
    var text = document.createTextNode('Reset Filters');
    $('.reset_btn').append(img, text);
  
    console.log(text);
  
  </script>
  
  