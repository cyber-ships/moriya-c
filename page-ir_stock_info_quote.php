<?php get_header(); ?>

    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"><small>Stock Quotes</small>株価情報</span>
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
        <li><a href="../../../ir/index.html">IR情報</a></li>
        <li><a href="../../../ir/stock_info/index.html">株式情報</a></li>
        <li>株価情報</li>
      </ul>

      <!-- ir_stock_info_quote -->
      <section class="ir_stock_quote">
        <div class="inner">
          <div class="quote_bgc">
            <h2 class="ttl_l">Yahoo!JAPAN提供の株価情報</h2>
            <p class="lead">
              当社の株式情報は下記から<br class="sp" />ご確認ください。
            </p>
            <a
              href="https://finance.yahoo.co.jp/quote/6226.T/chart"
              class="ir_stock_quote_link"
              target="_blank"
              >最新の株価情報はYahoo!ファイナンスを<br
                class="sp"
              />ご確認ください<br /><span
                >[ Yahoo!ファイナンスの株価情報を開く]</span
              ></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_stock_info_quote -->
    </main>

    <?php get_footer(); ?>
