<?php
function add_files() {
  // Reset Style
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css');

  // Adobe Fonts
  wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/vzg6rie.css');

  // Google Fonts
  wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;800;900&display=swap');
  wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');

  // Swiper Styles
  wp_enqueue_style('swiper-style', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css');

  // Main Styles
  wp_enqueue_style('main-style', get_stylesheet_uri());

  // modules Styles
  wp_enqueue_style('modules-style', get_template_directory_uri() . '/assets/css/style.css');

  // Top Styles
  wp_enqueue_style('top-style', get_template_directory_uri() . '/css/top.css');

  // maintenance Styles
  wp_enqueue_style('maintenance-style', get_template_directory_uri() . '/css/maintenance.css'); 

  // maintenance/partial Styles
  wp_enqueue_style('maintenance_partial-style', get_template_directory_uri() . '/css/maintenance_partial.css');

  // company Styles
  wp_enqueue_style('company-style', get_template_directory_uri() . '/css/company.css');

  // company Styles/profile Styles
  wp_enqueue_style('company_profile-style', get_template_directory_uri() . '/css/company_profile.css');

  // company Styles/office Styles
  wp_enqueue_style('company_office-style', get_template_directory_uri() . '/css/company_office.css');

  // company Styles/message Styles
  wp_enqueue_style('company_message-style', get_template_directory_uri() . '/css/company_message.css');

  // company Styles/history Styles
  wp_enqueue_style('company_history-style', get_template_directory_uri() . '/css/company_history.css');

  // company Styles/client Styles
  wp_enqueue_style('company_client-style', get_template_directory_uri() . '/css/company_client.css');
}

add_action('wp_enqueue_scripts', 'add_files');


?>