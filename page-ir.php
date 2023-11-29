<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Investors</small>IR情報</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri("/img/ir/heading_img.jpg")); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li>IR情報</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- ir -->
      <section>
        <div class="inner">
          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/02/14</span
                    ><span class="cat">法定開示</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >四半期報告書－第76期第3四半期(2022/10/01－2022/12/31)</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/02/13</span
                    ><span class="cat">決算短信</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >2023年3月期　第3四半期短信[日本基準]（非連結）</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/12/16</span
                    ><span class="cat">IR資料</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >会社説明会プレゼンテーションおよび質疑応答動画（2022年11月21日開催）</a
                    >
                  </dd>
                </dl>
              </li>
            </ul>
            <div class="txt_lnk">
              <a href="/ir_news/">IR NEWS一覧はこちら</a>
            </div>
          </div>

          <div class="ir_cat_list">
            <div class="block financial">
              <a href="/ir_finance_info/">
                <div class="ttl">
                  業績・財務情報<small>Financial Information</small>
                </div>
              </a>
              <div class="list">
                <ul>
                  <li>
                    <a href="/ir_finance_info_performance/"
                      >経営成績</a
                    >
                  </li>
                  <li>
                    <a href="/ir_finance_info_finance/">財政情報</a>
                  </li>
                  <li>
                    <a href="/ir_finance_info_cashflow/"
                      >キャッシュフロー</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="ir_cat_list">
            <div class="block financial">
              <a href="/ir_library/">
                <div class="ttl">IRライブラリ<small>IR Library</small></div>
              </a>
              <div class="list">
                <ul>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-01','ir_library_category')) ?>">決算短信</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-02','ir_library_category')) ?>"
                      >決算説明資料</a
                    >
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-04','ir_library_category')) ?>"
                      >有価証券報告書等法定開示資料</a
                    >
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-06','ir_library_category')) ?>"
                      >株主総会関連資料</a
                    >
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-05','ir_library_category')) ?>">その他IR資料</a>
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-03','ir_library_category')) ?>"
                      >適時開示資料</a
                    >
                  </li>
                  <li>
                    <a href="<?php echo esc_url(get_term_link('library_cat-07','ir_library_category')) ?>"
                      >コーポレート・ガバナンス</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="ir_cat_list">
            <div class="block financial">
              <a href="/ir_stock_info/">
                <div class="ttl">株式情報<small>Stock Information</small></div>
              </a>
              <div class="list">
                <ul>
                  <li>
                    <a href="/ir_stock_info_stock/">株式基本情報</a>
                  </li>
                  <li>
                    <a href="/ir_stock_info_quote/">株価情報</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="ir_cat_list">
            <div class="block financial">
              <a href="/ir_others/">
                <div class="ttl">
                  その他IR情報<small>Other IR Information</small>
                </div>
              </a>
              <div class="list">
                <ul>
                  <li><a href="/company_profile/">会社概要</a></li>
                  <li>
                    <a href="/company_message/">代表メッセージ</a>
                  </li>
                  <li>
                    <a href="/ir_others_calender/">IRカレンダー</a>
                  </li>
                  <li><a href="/ir_others_faq/">FAQ</a></li>
                  <li>
                    <a href="/ir_others_policy/"
                      >ディスクロージャーポリシー</a
                    >
                  </li>
                  <li>
                    <a href="/ir_others_disclaimer/">免責事項</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="btn_wrap04">
            <a class="btn type-01" href="/ir_notice/"
              ><span>電子広告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir -->
    </main>

  <?php get_footer(); ?>