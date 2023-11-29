<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>守谷輸送機工業</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- header -->
    <header>
      <div class="inner">
        <div class="logo">
          <a href="/"><img src="<?php echo esc_url(get_theme_file_uri('/img/logo.svg')); ?>" alt="守谷輸送機工業株式会社"></a>
        </div>
        <div class="global-nav-header">
          <div class="menu-trigger">
            <span></span><span></span><span></span>
          </div>
        </div>
        <nav class="global-nav">
          <ul class="nav-list">
            <li class="nav-item sp">
              <a href="/"><span>トップページ</span></a>
            </li>
            <li class="nav-item">
              <a href="/about/"><span>私たちについて</span></a>
            </li>
            <li class="nav-item toggle">
              <a href="/company/" class="pointer_none"><span>企業情報</span></a>
              <div class="nav-item_sub">
                <div class="nav-item_sub_inner">
                  <div class="nav-item_sub_title">
                    <a href="/company/">
                      <small>COMPANY</small><span>企業情報</span>
                    </a>
                  </div>
                  <div class="nav-item_sub_list">
                    <div class="list">
                      <div class="heading">
                        <a href="/company_profile/"><span>会社概要</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/company_message/"><span>代表メッセージ</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/company_history/"><span>沿革</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/company_office/"><span>事業所一覧 </span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/company_client/"><span>主な取引先</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item toggle">
              <a href="/ir/" class="pointer_none"><span>IR情報</span></a>
              <div class="nav-item_sub">
                <div class="nav-item_sub_inner">
                  <div class="nav-item_sub_title">
                    <a href="/ir/">
                      <small>INVESTORS</small><span><em>IR</em>情報</span>
                    </a>
                  </div>
                  <div class="nav-item_sub_list">
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_news/"><span>ニュース</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_finance_info/"><span>業績・財務情報</span></a>
                      </div>
                      <ul>
                        <li>
                          <a href="/ir_finance_info_performance/"><span>業績推移</span></a>
                        </li>
                        <li>
                          <a href="/ir_finance_info_finance/"><span>財務状況</span></a>
                        </li>
                        <li>
                          <a href="/ir_finance_info_cashflow/"><span>キャッシュフロー</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_library/"><span>IRライブラリ</span></a>
                      </div>
                      <ul>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-01','ir_library_category')) ?>"><span>決算短信</span></a>
                        </li>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-02','ir_library_category')) ?>"><span>決算説明資料</span></a>
                        </li>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-03','ir_library_category')) ?>">
                            <span>適時開示情報</span>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-04','ir_library_category')) ?>/"
                            ><span
                              >有価証券報告書等<br
                                class="pc"
                              />法定開示資料</span
                            ></a>
                        </li>
                      </ul>
                      <ul>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-05','ir_library_category')) ?>"><span>IR資料</span></a>
                        </li>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-06','ir_library_category')) ?>">
                            <span>株主総会関連資料</span>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo esc_url(get_term_link('library_cat-07','ir_library_category')) ?>"><span>コーポレート・ガバナンス</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_stock_info/"><span>株式情報</span></a>
                      </div>
                      <ul>
                        <li>
                          <a href="/ir_stock_info_stock/"><span>株式基本情報</span></a>
                        </li>
                        <li>
                          <a href="/ir_stock_info_quote/"><span>株価情報</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_others/"><span>その他情報</span></a>
                      </div>
                      <ul>
                        <li>
                          <a href="/ir_others_calender/"><span>IRカレンダー</span></a>
                        </li>
                        <li>
                          <a href="/ir_others_policy/"><span>ディスクロージャーポリシー</span></a>
                        </li>
                        <li>
                          <a href="/ir_others_disclaimer/"><span>免責事項</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/ir_notice/"><span>電子広告</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item toggle">
              <a href="/products/" class="pointer_none"><span>製品紹介</span></a>
              <div class="nav-item_sub">
                <div class="nav-item_sub_inner">
                  <div class="nav-item_sub_title">
                    <a href="/products/">
                      <small>PRODUCTS</small><span>製品紹介</span>
                    </a>
                  </div>
                  <div class="nav-item_sub_list">
                    <div class="list">
                      <div class="heading">
                        <a href="/products_freightelevator/"><span>荷物用エレベーター</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/products_shipelevator/"><span>船舶用エレベーター</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/products_macklifter/"><span>マックリフター </span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/products_renewal/">
                          <span>リニューアル（入替）</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item toggle">
              <a href="/maintenance/" class="pointer_none"><span>メンテナンス</span></a>
              <div class="nav-item_sub">
                <div class="nav-item_sub_inner">
                  <div class="nav-item_sub_title">
                    <a href="/maintenance/">
                      <small>MAINTENANCE</small><span>メンテナンス</span>
                    </a>
                  </div>
                  <div class="nav-item_sub_list">
                    <div class="list">
                      <div class="heading">
                        <a href="/maintenance_ss/"><span>メンテナンスについて</span></a>
                      </div>
                      <ul>
                        <li>
                          <a href="/maintenance_maintenance-agreement/">
                            <span>メンテナンス契約</span>
                          </a>
                        </li>
                        <li>
                          <a href="/maintenance_base/"><span>サービス拠点</span></a>
                        </li>
                        <li>
                          <a href="/maintenance_partial"><span>リニューアル（部分入替）</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/maintenance_conservative-info/"><span>メンナンス契約</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/maintenance_technicalinformation/"><span>プランジャー測定対象エレベーターの技術情報</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/maintenance_periodicinspection/"><span>定期検査情報</span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/maintenance_base/"><span>サービス拠点</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a href="/works/"><span>施工・納入実績</span></a>
            </li>
            <li class="nav-item toggle">
              <a href="/recruit/" class="pointer_none"><span>採用情報</span></a>

              <div class="nav-item_sub">
                <div class="nav-item_sub_inner">
                  <div class="nav-item_sub_title">
                    <a href="/recruit/">
                      <small>RECRUIT</small><span>採用情報</span>
                    </a>
                  </div>
                  <div class="nav-item_sub_list">
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_youkou/"><span>【中途採用】募集要項 </span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_youkou2/"><span>【新卒採用】募集要項 </span></a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_message/">
                          <span>応募者へのメッセージ</span>
                        </a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_joblist/">
                          <span>職種紹介</span>
                        </a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_work/">
                          <span>社員紹介</span>
                        </a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_number/">
                          <span>数字で見る守谷エレベーター</span>
                        </a>
                      </div>
                    </div>
                    <div class="list">
                      <div class="heading">
                        <a href="/recruit_faq/">
                          <span>FAQ</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="/policy/"><span>ポリシー</span></a>
            </li>
          </ul>
        </nav>
        <div class="contact">
          <a href="/contact/"><span>お問合わせ</span></a>
        </div>
      </div>
    </header>
    <!-- /header -->