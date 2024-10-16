<section class="our-team-block">
    <div class="wrap-our-team-block">
        <div class="container">
            <div class="content-block">
                <div class="wrap-content">
                   <h2 class="main-heading"><?php echo $block['main_heading'] ?></h2>
                   <div class="text"><?php echo $block['text'] ?></div>
                </div>
        

                <div class="wrap-teams ">
                    <div class="wrap-therapist-team">

                    

                        <?php 
                            if($block['therapist_speciality']){
                                $args = array(
                                    'post_type' => 'therapist',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'posts_per_page' => 12,
                                    'tax_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'taxonomy' => 'text_filter',
                                            'field' => 'term_id',
                                            'terms' => $block['therapist_speciality'],
                                        )
                                    ),
    
                                );
                            }else{
                                $args = array(
                                    'post_type' => 'therapist',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'posts_per_page' => 12,
                                );
                            }
                            $the_query  = new WP_Query( $args );
                            $categories_list = get_categories();


                            foreach($the_query ->posts as $query){
                                $data = get_field("therapist_details", $query->ID);
                                if (has_post_thumbnail($query->ID)) {
                                    $image_url = get_the_post_thumbnail_url($query->ID, 'medium');
                                    $post_url = $query->guid;;
                                  }
                               
                                ?>
                                		<div class="member-block">
                                        <div class="front">
                                            <div class="member-image">
                                                <img src="<?php echo $image_url ?>" alt=" Therapist image">
                                            </div>
                                            <div class="member_details">
                                                <div class="details">
                                                    <h2 class="heading"><?php echo $query->post_title; ?></h2>
                                                    <div class="pronoun"><?php  echo $data["pronouns"] ?></div>
                                                </div>
                                                <div class="position"><?php  echo $data["position"] ?></div>
                                                <div class="description"><div class="text"><?php echo $data['therapist_info_details'] ?></div></div>
                                            
                                            
                                        
                                            </div>
                                            <div class="profile_btn">
                                                <a href="<?php echo $post_url; ?>">View Profile <img src="/wp-content/uploads/2023/07/arrow-right.svg" alt=""></a>
                                            </div>

                                    </div>
                                    <div class="back">
                                        <div>
                                            <div class="member-image">
                                            <img src="<?php echo $image_url ?>" alt=" Therapist image">
                                                <div class="details">
                                                    <h2 class="heading"><?php echo $query->post_title; ?></h2>
                                                    <div class="position"><?php  echo $data["position"] ?></div>
                                                </div>
                                            </div>
                                            <div class="member_details">
                                            
                                                <div class="therapy">
                                                    <?php
                                                    // $terms = get_the_terms( $query->ID, 'therapist_approach' ); 
                                                    $terms = get_the_terms( $query->ID, 'text_filter' ); 
                                                    if ( $terms && ! is_wp_error( $terms ) ) : 

                                                        $i = 0;
                                                        foreach ( $terms as $term ) {
                                                            if($i== 3){
                                                                break;
                                                            }
                                                            ?>

                                                            <div class="therapy_type"> <span class= "dot"></span> <?php echo $term -> name; ?></div>
                                                            <?php
                                                            $i++;
                                                        }
                                                        ?>
                                                        
                                                    <?php endif; ?>
                                                </div>
                                                <div class="description">
                                                    <?php echo $query -> post_content ?>
                                                </div>
                                        

                                            </div>
                                        </div>
                                        <div>
                                            <div class="profile_btn">
                                                    <a href="<?php echo $post_url ?>">View Profile <img src="/wp-content/uploads/2023/07/arrow-right.svg" alt=""></a>
                                            </div>
                                            <div class="call_btn">
                                                    <a href="<?php echo $post_url ?>">Free Introduction Call <img src="/wp-content/uploads/2023/07/phone.svg" alt=""></a>
                                            </div>

                                        </div>
                                    
                                        

                                    </div>

			</div>
            <?php   }?>
            </div>
                                






                        
                        




              </div>

                <?php if($block['show_bottom_text']){ ?>
                    <div class="bottom-text"><?php echo $block['bottom_text'] ?></div>
                <?php } ?>
                <?php if($block['button']){?>
                    <div class="wrap-btn">
                        <div class="btn-wrap">
                            <div class="shadow"></div>
                            <a class="button" href="<?php echo $block['button']['url'] ?>"><?php echo $block['button']['title'] ?>
                            </a>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>
