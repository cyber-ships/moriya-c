<?php get_header(); ?>

    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"><small>Public Notice</small>電子公告</span>
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
        <li><a href="/">トップページ</a></li>
        <li><a href="/ir/">IR情報</a></li>
        <li>電子公告</li>
      </ul>

      <!-- ir_notice -->
      <section class="ir_notice">
        <div class="inner">
          <div class="ir_notice_box">
            <p class="ir_notice_box_title">
              ただいま公告すべき事項はございません。
            </p>
            <p class="ir_notice_box_copy">
              当社の決算公告については会社法第440条第4項に基づき、掲載しておりません。<br />
              なお、当社の貸借対照表及び損益計算書については金融庁の下記サイトをご参照ください。
            </p>
            <div class="ir_notice_gray">
              <a
                href="https://disclosure2.edinet-fsa.go.jp/WEEK0010.aspx"
                class="ir_notice_box_edinet"
                target="_blank"
                >EDINETはこちら</a
              >
              <p class="ir_notice_box_code">
                【EDINETコード】<br class="sp" />守谷輸送機工業：E37499
              </p>
            </div>
          </div>

          <div class="btn_wrap05">
            <a class="btn type-05" href="/ir/"
              ><span>IR情報</span></a
            >
            <a class="btn type-05" href="/ir_finance_info/"
              ><span>業績・財務情報</span></a
            >
            <a class="btn type-05" href="/ir_library/"
              ><span>IRライブラリ</span></a
            >
            <a class="btn type-05" href="/ir_stock_info/"
              ><span>株式情報</span></a
            >
            <a class="btn type-05" href="/ir_others/"
              ><span>その他情報</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_notice -->
    </main>

    <?php get_footer(); ?>
