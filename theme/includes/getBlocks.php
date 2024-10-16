<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
              case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
              case 'global_banner_block':
              include 'blocks/global_banner_block.php';
              break;
              case 'banner_block':
              include 'blocks/banner_block.php';
              break;
              case 'mental_health_block':
              include 'blocks/mental_health_block.php';
              break;
              case 'how_it_works_block':
              include 'blocks/how_it_works_block.php';
              break;
              case 'icon_box_block':
              include 'blocks/icon_block.php';
              break;
              case 'employee_login_block':
              include 'blocks/employee_login_block.php';
              break;
              case 'fujitsu_banner_block':
              include 'blocks/fujitsu_banner_block.php';
              break;
              case 'unboxed_block':
              include 'blocks/unboxed_block.php';
              break;
              case 'services_block':
              include 'blocks/services_block.php';
              break;
              case 'crisis_support':
              include 'blocks/crisis-support-block.php';
              break;
              case 'our_team_block':
              include 'blocks/our_team_block.php';
              break;
              case 'pricing_block':
              include 'blocks/our_pricing_block.php';
              break;
              case 'faqs_block':
              include 'blocks/faq_block.php';
              break;
              case 'logos_block':
              include 'blocks/logos_block.php';
              break;
              case 'get_in_touch_block':
              include 'blocks/get_in_touch_block.php';
              break;
              case 'wellness_recent_blogs':
              include 'blocks/therapist_blog_posts.php';
              break;
              case 'heading_text_block':
              include 'blocks/heading_text_block.php';
              break;
              case 'about_blurb':
              include 'blocks/about_blurb.php';
              break;
              case 'about_text_block':
              include 'blocks/about_text_block.php';
              break;
              case 'about_multi_blurbs':
              include 'blocks/about_multi_blurbs.php';
              break;
              case 'service_banner':
              include 'blocks/service_banner_block.php';
              break;
              case 'service_heading_button':
              include 'blocks/heading_button_block.php';
              break;
              case 'service_help_block':
              include 'blocks/team_help_block.php';
              break;
              case 'service_help_text_block':
              include 'blocks/team_help_text_block.php';
              break;
              case 'blog_banner_block':
              include 'blocks/blog_banner_block.php';
              break;
              case 'blog_latest_articles_block':
              include 'blocks/blog_latest_articles_block.php';
              break;
              case 'career_heading_button_block':
              include 'blocks/career_heading_button_block.php';
              break;
              case 'unboxed_roadmap_block':
              include 'blocks/unboxed_roadmap_block.php';
              break;
              case 'join_unboxed_block':
              include 'blocks/join_unboxed_block.php';
              break;
              case 'contact_form_block':
              include 'blocks/contact_form_block.php';
              break;
              case 'terms_privacy_block':
              include 'blocks/terms_service_block.php';
              break;
              case 'terms_list_points_block':
              include 'blocks/terms_points_block.php';
              break;
              case 'therapist_banner_block':
              include 'blocks/therapist_banner.php';
              break;
              case 'therapist_team_block':
              include 'blocks/therapist_team_block.php';
              break;
              case 'custom_recent_blogs':
              include 'blocks/custom_recent_blogs.php';
              break;
              case 'book_appoinment_block':
              include 'blocks/book_appointment_block.php';
              break;
              case 'shedule_a_call':
              include 'blocks/shedule_intro_call_block.php';
              break;
              case 'two_column_section':
              include 'blocks/two_column_section.php';
              break;
          }
        }
      }
    }
  }

?>
