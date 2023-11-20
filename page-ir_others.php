<?php get_header(); ?>


    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Other IR Information</small>その他情報</span
            >
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/ir/stock_info/heading_img.jpg')); ?>"
                alt="その他情報"
              />
            </picture>
          </h1>
        </div>
      </section>
      <!-- _page_heading -->

      <ul class="breadcrumbs">
        <li><a href="#">トップページ</a></li>
        <li><a href="../../ir/index.html">IR情報</a></li>
        <li>その他情報</li>
      </ul>

      <!-- ir_others -->
      <section class="ir_others">
        <div class="inner">
          <div class="ir_others_list">
            <div class="block calendar">
              <a href="../../ir/others/calender/index.html">
                <div class="ttl">IRカレンダー<small>IR Calendar</small></div>
              </a>
            </div>
            <div class="block policy">
              <a href="../../ir/others/policy/index.html">
                <div class="ttl">
                  ディスクロージャーポリシー<small>Disclosure Policy</small>
                </div>
              </a>
            </div>
            <div class="block policy">
              <a href="../../ir/others/disclimer/index.html">
                <div class="ttl">免責事項<small>Disclaimer</small></div>
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
            <a class="btn type-05" href="../../ir/stock_info/index.html"
              ><span>株式情報</span></a
            >
            <a class="btn type-05" href="../../ir/notice/index.html"
              ><span>電子公告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_others -->
    </main>

    <?php get_footer(); ?>
