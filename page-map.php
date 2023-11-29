<?php get_header(); ?>


    <main>
      <!-- company_page_heading -->
      <section class="page_heading map">
        <div class="inner">
          <h1>
            <span class="text"><small>SiteMap</small>サイトマップ</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/img/map/heading_img.jpg')); ?>" alt="企業情報" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li>サイトマップ</li>
      </ul>

      <!-- sitemap -->
      <section class="sitemap">
        <div class="inner">
          <h2 class="ttl_l">サイトマップ<br /><span>Sitemap</span></h2>
          <div class="sitemap_box_l">
            <div class="sitemap_box_s">
              <h3 class="ttl_s"><a href="/">➢ トップページ</a></h3>
              <p><a href="/about/">➢　私たちについて</a></p>
              <p><a href="/news/">➢　ニュース一覧</a></p>
              <p><a href="/company/">➢　企業情報</a></p>
              <p><a href="/company_profile/">➢　会社概要</a></p>
              <p>
                <a href="/company_message/">➢　代表メッセージ</a>
              </p>
              <p><a href="/company_history/">➢　沿革</a></p>
              <p><a href="/company_office/">➢　事業所一覧</a></p>
              <p><a href="/company_client/">➢　主な取引先</a></p>
            </div>
            <div class="sitemap_box_s">
              <h3 class="ttl_s">
                <a href="/products/">➢ 製品紹介</a>
              </h3>
              <p>
                <a href="/products_freightelevator/"
                  >➢　荷物用エレベーター</a
                >
              </p>
              <p>
                <a href="/products_shipelevator/"
                  >➢　船舶用エレベーター</a
                >
              </p>
              <p>
                <a href="/products_macklifter/"
                  >➢　マックリフター</a
                >
              </p>
              <p>
                <a href="/products_renewal/"
                  >➢　リニューアル（入替）</a
                >
              </p>
              
            </div>
            <div class="sitemap_box_s">
              <h3 class="ttl_s">
                <a href="/maintenance/">➢ メンテナンス</a>
              </h3>
              <p>
                <a href="/maintenance_ss/"
                  >➢　メンテナンスについて</a
                >
              </p>
              <p>
                <a href="/maintenance_maintenance-agreement/"
                  >➢　メンテナンス契約</a
                >
              </p>
              <p>
                <a href="/maintenance_base/">➢　サービス拠点</a>
              </p>
              <p>
                <a
                  href="/maintenance_technicalinformation/"
                  >➢　プランジャー測定対象エレベーターの技術情報</a
                >
              </p>
              <p>
                <a
                  href="/maintenance_download/"
                  >➢　各種書類一覧</a
                >
              </p>
              <p>
                <a
                  href="../maintenance_periodicinspection"
                  >➢　定期検査情報</a
                >
              </p>
              <p><a href="/maintenance_partial/">➢　リニューアル（部分入替）</a></p>
            </div>
            <div class="sitemap_box_s">
              <h3 class="ttl_s"><a href="/recruit/">➢ 採用情報</a></h3>
              <p>
                <a href="/recruit_youkou/">➢　【中途】募集要項</a>
              </p>
              <p>
                <a href="/recruit_youkou2/">➢　【新卒】募集要項</a>
              </p>
              <p><a href="/recruit_joblist/">➢　職種紹介</a></p>
              <p><a href="/recruit_work/">➢　社員紹介</a></p>
              <p>
                <a href="/recruit_message/"
                  >➢　応募者へのメッセージ</a
                >
              </p>
              <p>
                <a href="/recruit_number/"
                  >➢　数字で見る守谷エレベーター</a
                >
              </p>
              <p><a href="/recruit_faq/">➢　FAQ</a></p>
            </div>
          </div>

          <div class="sitemap_box_bottom">
            <h3 class="ttl_s"><a href="/ir/">➢ IR情報</a></h3>
            <div class="sitemap_box_bottom_l">
              <div class="sitemap_box_bottom_s">
                <p><a href="/ir_news/">➢　IRニュース一覧</a></p>
                <p>
                  <a href="/ir_finance_info/">➢　業績・財務情報</a>
                </p>
                <p>
                  <a href="/ir_finance_info_performance/"
                    >➢　業績推移</a
                  >
                </p>
                <p>
                  <a href="/ir_finance_info_finance/"
                    >➢　財務状況</a
                  >
                </p>
                <p>
                  <a href="/ir_finance_info_cashflow/"
                    >➢　キャッシュフロー</a
                  >
                </p>
              </div>

              <div class="sitemap_box_bottom_s">
                <p><a href="/ir_library/">➢　IRライブラリ</a></p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-01','ir_library_category')) ?>">➢　決算短信</a>
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-02','ir_library_category')) ?>"
                    >➢　決算説明資料</a
                  >
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-03','ir_library_category')) ?>"
                    >➢　適時開示情報
                  </a>
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-04','ir_library_category')) ?>"
                    >➢　有価証券報告書等法定開示資料</a
                  >
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-05','ir_library_category')) ?>">➢　IR資料</a>
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-06','ir_library_category')) ?>"
                    >➢　株主総会関連資料</a
                  >
                </p>
                <p>
                  <a href="<?php echo esc_url(get_term_link('library_cat-07','ir_library_category')) ?>"
                    >➢　コーポレート・ガバナンス</a
                  >
                </p>
              </div>

              <div class="sitemap_box_bottom_s">
                <p><a href="/ir_stock_info/">➢　株式情報</a></p>
                <p>
                  <a href="/ir_stock_info_stock/"
                    >➢　株式基本情報</a
                  >
                </p>
                <p>
                  <a href="/ir_stock_info_quote/">➢　株価情報</a>
                </p>
                <p><a href="/ir_others/">➢　その他情報</a></p>
                <p>
                  <a href="/ir_others_calender/">➢　IRカレンダー</a>
                </p>
                <p>
                  <a href="/ir_others_policy/"
                    >➢　ディスクロージャーポリシー</a
                  >
                </p>
                <p>
                  <a href="/ir_others_disclaimer/">➢　免責事項</a>
                </p>
                <p><a href="/ir_notice/">➢　電子広告 </a></p>
              </div>
            </div>
          </div>

          <div class="sitemap_box_l">
            <div class="sitemap_box_s">
              <h3 class="ttl_s">
                <a href="/contact/">➢お問合わせ</a>
              </h3>
              <p><a href="/map/">➢　サイトマップ</a></p>
            </div>

            <div class="sitemap_box_s">
              <h3 class="ttl_s">
                <a href="/policy/">➢ ポリシー</a>
              </h3>
              <p>
                <a href="/policy_privacy/"
                  >➢　プライバシーポリシー</a
                >
              </p>
              <p>
                <a href="/policy_antisocial"
                  >➢　反社会勢力への対応に関する基本方針</a
                >
              </p>
              <p>
                <a href="/policy_security"
                  >➢　情報セキュリティ方針</a
                >
              </p>
              <p>
                <a href="/policy_gender/"
                  >➢　男女共同参画基本法に基づく開示</a
                >
              </p>
              <p>
                <a href="/policy_career/">➢　中途採用実績データ</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- /sitemap -->
    </main>

    <?php get_footer(); ?>
