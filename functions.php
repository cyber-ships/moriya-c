<?php
function add_files() {
  // Reset Style
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/css/reset.css');

  // Share Style
  wp_enqueue_style('share-style', get_template_directory_uri() . '/css/share.css');

  // Adobe Fonts
  wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/vzg6rie.css');

  // Google Fonts
  wp_enqueue_style('google-fonts-noto', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;800;900&display=swap');
  wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap');

  // Xj-Storage
  wp_enqueue_style('xj-storage', '//www.xj-storage.jp');

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

  // about Styles
  wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');

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

  // ir Styles
  wp_enqueue_style('ir-style', get_template_directory_uri() . '/css/ir.css');

  // ir Styles/news Styles
  wp_enqueue_style('ir_news-style', get_template_directory_uri() . '/css/ir_news.css');

  // ir Styles/news Styles/message Styles
  wp_enqueue_style('ir_news_message-style', get_template_directory_uri() . '/css/ir_news_message.css');

  // ir Styles/finance_info Styles
  wp_enqueue_style('ir_finance_info-style', get_template_directory_uri() . '/css/ir_finance_info.css');

  // ir Styles/finance_info Styles/performance Styles
  wp_enqueue_style('ir_finance_info_performance-style', get_template_directory_uri() . '/css/ir_finance_info_performance.css');

  // ir Styles/finance_info Styles/finance Styles
  wp_enqueue_style('ir_finance_info_finance-style', get_template_directory_uri() . '/css/ir_finance_info_finance.css');

  // ir Styles/finance_info Styles/cashflow Styles
  wp_enqueue_style('ir_finance_info_cashflow-style', get_template_directory_uri() . '/css/ir_finance_info_cashflow.css');

  // ir Styles/library Styles
  wp_enqueue_style('ir_library-style', get_template_directory_uri() . '/css/ir_library.css');

  // ir Styles/library Styles/results Styles
  wp_enqueue_style('ir_library_results-style', get_template_directory_uri() . '/css/ir_library_results.css');

  // ir Styles/library Styles/presentations Styles
  wp_enqueue_style('ir_library_presentations-style', get_template_directory_uri() . '/css/ir_library_presentation.css');

  // ir Styles/library Styles/securities Styles
  wp_enqueue_style('ir_library_securities-style', get_template_directory_uri() . '/css/ir_library_securities.css');

  // ir Styles/library Styles/meeting Styles
  wp_enqueue_style('ir_library_meeting-style', get_template_directory_uri() . '/css/ir_library_meeting.css');

  // ir Styles/library Styles/others Styles
  wp_enqueue_style('ir_library_others-style', get_template_directory_uri() . '/css/ir_library_others.css');
  
  // ir Styles/library Styles/disclosure Styles
  wp_enqueue_style('ir_library_disclosure-style', get_template_directory_uri() . '/css/ir_library_disclosure.css');

  // ir Styles/library Styles/governance Styles
  wp_enqueue_style('ir_library_governance-style', get_template_directory_uri() . '/css/ir_library_governance.css');

  // ir Styles/stock_info Styles
  wp_enqueue_style('ir_stock_info-style', get_template_directory_uri() . '/css/ir_stock_info.css');

  // ir Styles/stock_info Styles/stock Styles
  wp_enqueue_style('ir_stock_info_stock-style', get_template_directory_uri() . '/css/ir_stock_info.css');

  // ir Styles/stock_info Styles/quote Styles
  wp_enqueue_style('ir_stock_info_quote-style', get_template_directory_uri() . '/css/ir_stock_info.css');

  // ir Styles/others Styles
  wp_enqueue_style('ir_others-style', get_template_directory_uri() . '/css/ir_others.css');

  // ir Styles/others Styles/calender Styles
  wp_enqueue_style('ir_others_calender-style', get_template_directory_uri() . '/css/ir_others.css');

  // ir Styles/others Styles/policy Styles
  wp_enqueue_style('ir_others_policy-style', get_template_directory_uri() . '/css/ir_others.css');

  // ir Styles/others Styles/disclaimer Styles
  wp_enqueue_style('ir_others_disclaimer-style', get_template_directory_uri() . '/css/ir_others.css');

  // ir Styles/notice Styles
  wp_enqueue_style('ir_notice-style', get_template_directory_uri() . '/css/ir_notice.css');

  // recruit Styles
  wp_enqueue_style('recruit-style', get_template_directory_uri() . '/css/recruit.css');

  // recruit Styles/youkou Styles
  wp_enqueue_style('recruit_youkou-style', get_template_directory_uri() . '/css/recruit_youkou.css');

  // recruit Styles/youkou2 Styles
  wp_enqueue_style('recruit_youkou2-style', get_template_directory_uri() . '/css/recruit_youkou.css');

  // recruit Styles/message Styles
  wp_enqueue_style('recruit_message-style', get_template_directory_uri() . '/css/recruit_youkou.css');

  // recruit Styles/joblist Styles
  wp_enqueue_style('recruit_joblist-style', get_template_directory_uri() . '/css/recruit_youkou.css');

  // recruit Styles/work Styles
  wp_enqueue_style('recruit_work-style', get_template_directory_uri() . '/css/recruit_work.css');

  // recruit Styles/number Styles
  wp_enqueue_style('recruit_number-style', get_template_directory_uri() . '/css/recruit_number.css');

  // recruit Styles/faq Styles
  wp_enqueue_style('recruit_faq-style', get_template_directory_uri() . '/css/recruit_faq.css');

  // products Styles
  wp_enqueue_style('products-style', get_template_directory_uri() . '/css/products.css');

  // products Styles
  wp_enqueue_style('products_renewal-style', get_template_directory_uri() . '/css/products_renewal.css');

  // policy Styles
  wp_enqueue_style('policy-style', get_template_directory_uri() . '/css/policy.css');

  // map Styles
  wp_enqueue_style('map-style', get_template_directory_uri() . '/css/map.css');

  // works Styles
  wp_enqueue_style('works-style', get_template_directory_uri() . '/css/works.css');

  // inquiry Styles
  wp_enqueue_style('inquiry-style', get_template_directory_uri() . '/css/inquiry.css');

  // news Styles
  wp_enqueue_style('news-style', get_template_directory_uri() . '/css/news.css');

  // news_detail Styles
  wp_enqueue_style('news_detail-style', get_template_directory_uri() . '/css/news_detail.css');
}

add_action('wp_enqueue_scripts', 'add_files');


?>