<?php get_header(); ?>

    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"><small>Stock Information</small>株式情報</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/ir/stock_info/heading_img.jpg')); ?>"
                alt="IR 情報"
              />
            </picture>
          </h1>
        </div>
      </section>
      <!-- _page_heading -->

      <ul class="breadcrumbs">
        <li><a href="../../../">トップページ</a></li>
        <li><a href="../../../ir/">IR情報</a></li>
        <li>株式情報</li>
      </ul>

      <!-- ir_stock_info -->
      <section class="ir_stock_info">
        <div class="inner">
          <div class="stock_info_sub_page_list">
            <div class="block information">
              <a href="../stock_info/stock/">
                <div class="ttl">
                  株式基本情報<small>Stock Information</small>
                </div>
              </a>
            </div>
            <div class="block quotes">
              <a href="../stock_info/quote/index.html">
                <div class="ttl">株価情報<small>Stock Quotes</small></div>
              </a>
            </div>
          </div>

          <div class="btn_wrap05">
            <a class="btn type-05" href="../../ir/library/index.html"
              ><span>IRライブラリ</span></a
            >
            <a class="btn type-05" href="../../ir/index.html"
              ><span>IR情報</span></a
            >
            <a class="btn type-05" href="../../ir/finance_info/index.html"
              ><span>業績・財務情報</span></a
            >
            <a class="btn type-05" href="../../ir/others/index.html"
              ><span>その他情報</span></a
            >
            <a class="btn type-05" href="../../ir/notice/index.html"
              ><span>電子公告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_stock_info -->
    </main>

    <?php get_footer(); ?>
