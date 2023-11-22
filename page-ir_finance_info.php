<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Financial Information</small>業績・財務情報</span
            >
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../../index.html">トップページ</a></li>
        <li><a href="../../news/index.html">IR情報</a></li>
        <li>業績・財務情報</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- ir_finance_info -->
      <section class="ir_finance_info">
        <div class="inner">
          <div class="ir_finance_info_list">
            <div class="block operating">
              <a href="../finance_info/performance/index.html">
                <div class="ttl">業績推移<small>Operating Results</small></div>
              </a>
            </div>
            <div class="block financial">
              <a href="../finance_info/finance/index.html">
                <div class="ttl">財務状況<small>Financial Information</small></div>
              </a>
            </div>
            <div class="block cash">
              <a href="../finance_info/cashflow/index.html">
                <div class="ttl">キャッシュフロー<small>Cash Flow</small></div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/contact_ttl.svg')); ?>" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_finance_info -->
    </main>

    <?php get_footer(); ?>
