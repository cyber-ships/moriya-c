<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Financial Position</small>財務状況</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="財務状況">
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li><a href="/ir/">IR情報</a></li>
        <li><a href="/ir_finance_info/">業績・財務情報</a></li>
        <li>財務状況</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- ir_finance_info_finance -->
      <section class="info_finance">
        <div class="inner">
          <div class="btn_wrap04">
            <a
              class="btn type-01"
              href="/ir_finance_info_performance/"
              ><span>業績推移</span></a
            >
            <a class="not-link"><span>財務状況</span></a>
            <a class="btn type-01" href="/ir_finance_info_cashflow/"
              ><span>キャッシュフロー</span></a
            >
          </div>

          <div class="info_finance_box">
            <div class="info_finance_box_content">
              <h2 class="info_finance_box_content_title">総資産</h2>
              <p>（百万円）</p>
              <div class="info_finance_box_content_graph">
                <!-- xj-contents // -->
                <img
                  src="https://www.xj-storage.jp/public-graph-at/graph/AS08769/9b079eb2/746b/43bc/8889/79dc8c14c1bf/graph_ja.png"
                  alt="総資産"
                />
                <!-- // xj-contents -->
              </div>
              <div class="info_finance_box_content_table">
                <!-- xj-contents // -->
                <script
                  type="text/javascript"
                  src="https://www.xj-storage.jp/public-graph-at/table/AS08769/9b079eb2/746b/43bc/8889/79dc8c14c1bf/table_ja.js"
                ></script>
                <!-- // xj-contents -->
              </div>
            </div>

            <div class="info_finance_box_content">
              <h2 class="info_finance_box_content_title">純資産</h2>
              <p>（百万円）</p>
              <div class="info_finance_box_content_graph">
                <!-- xj-contents // -->
                <img
                  src="https://www.xj-storage.jp/public-graph-at/graph/AS08769/8d7080ca/c877/4a9a/a92f/a6393c4db4be/graph_ja.png"
                  alt="純資産"
                />
                <!-- // xj-contents -->
              </div>
              <div class="info_finance_box_content_table">
                <!-- xj-contents // -->
                <script
                  type="text/javascript"
                  src="https://www.xj-storage.jp/public-graph-at/table/AS08769/8d7080ca/c877/4a9a/a92f/a6393c4db4be/table_ja.js"
                ></script>
                <!-- // xj-contents -->
              </div>
            </div>

            <div class="info_finance_box_content">
              <h2 class="info_finance_box_content_title">自己資産比率</h2>
              <p>（％）</p>
              <div class="info_finance_box_content_graph">
                <!-- xj-contents // -->
                <img
                  src="https://www.xj-storage.jp/public-graph-at/graph/AS08769/d5dd415d/0ee7/4e90/b8ff/a502123a4211/graph_ja.png"
                  alt="自己資本比率"
                />
                <!-- // xj-contents -->
              </div>
              <div class="info_finance_box_content_table">
                <!-- xj-contents // -->
                <script
                  type="text/javascript"
                  src="https://www.xj-storage.jp/public-graph-at/table/AS08769/d5dd415d/0ee7/4e90/b8ff/a502123a4211/table_ja.js"
                ></script>
                <!-- // xj-contents -->
              </div>
            </div>

            <div class="info_finance_box_content">
              <h2 class="info_finance_box_content_title">1株当たり純資産</h2>
              <p>（円）</p>
              <div class="info_finance_box_content_graph">
                <!-- xj-contents // -->
                <img
                  src="https://www.xj-storage.jp/public-graph-at/graph/AS08769/e7fe1cd7/e977/42f1/9d5f/fbf8626b4bb9/graph_ja.png"
                  alt="１株当たり純資産"
                />
                <!-- // xj-contents -->
              </div>
              <div class="info_finance_box_content_table">
                <!-- xj-contents // -->
                <script
                  type="text/javascript"
                  src="https://www.xj-storage.jp/public-graph-at/table/AS08769/e7fe1cd7/e977/42f1/9d5f/fbf8626b4bb9/table_ja.js"
                ></script>
                <!-- // xj-contents -->
              </div>
            </div>
          </div>

          <p class="info_finance_copy">
            当社は2022年1月4日付で普通株式1株につき5株の株式分割を行なっております。<br />
            上記は当該株式分割に伴う影響を加味し、遡及修正を行った場合の1株当たり指標の推移を記載しております。
          </p>
          <p class="info_finance_title">ご利用上の注意</p>
          <p class="info_finance_copy">
            決算短信等の訂正が発表された場合、本データの記載内容は即時反映されません。<br />
            一部の指標については、決算短信様式変更に伴い通期のみの更新となる場合があります。
          </p>

          <div class="btn_wrap05">
            <a class="btn type-05" href="/ir_library/"
              ><span>IRライブラリ</span></a
            >
            <a class="btn type-05" href="/ir/"
              ><span>IR情報</span></a
            >
            <a class="btn type-05" href="/ir_stock_info/"
              ><span>株式情報</span></a
            >
            <a class="btn type-05" href="/ir_others/"
              ><span>その他情報</span></a
            >
            <a class="btn type-05" href="/ir_notice/"
              ><span>電子公告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_finance_info_performance  -->
    </main>

    <?php get_footer(); ?>
