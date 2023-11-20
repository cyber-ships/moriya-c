<?php get_header(); ?>


    <main>
      <section class="page_heading maintenance">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Maintenance</small>メンテナンスについて</span
            >
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/heading_img.jpg')); ?>"
                alt="メンテナンスについて"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li><a href="../../maintenance/index.html">メンテンナンス</a></li>
        <li>メンテナンスについて</li>
      </ul>
      <!-- /breadcrumbs -->

      <section>
        <div class="inner">
          <h2 class="ttl_l">
            お客様を支援するパートナーとして<br />メーカーメンテナンスによる <br>安心・安全を提供します。
            <span>Maintenance</span>
          </h2>
          <p class="lead">
            エレベーターの安全は適切な保守点検により<br class="sp">確保されております。<br>
            毎月の点検による機器の状態確認や結果に基づき<br class="sp">調整や修理を実施し、<br class="pc">事故や故障を未然に防ぐ<br class="sp">措置を講ずることこそが、<br class="sp">保守点検の本質と考えております。<br>
            弊社においては、社内講習を受け、<br class="sp">安全装置・各種機構を熟知した<br>
            サービスマンによる保守体制を構築しており、<br class="sp">最善の保守点検作業を行います。 
          </p>
        </div>
      </section>

      <section class="maintenance_ss">
        <div class="inner">
          <div class="block_type_01">
            <div class="block">
              <div class="block-img">
                <picture>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/safety_and_security_img_01.jpg')); ?>"
                    alt=""
                  />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">全国52ヶ所の<br class="pc">サービスステーションによる<br class="pc">24時間365日のサービス対応</h2>
                <p>
                  全国52ヶ所にサービスステーションを設置。細やかな保守と、万が一の故障時には迅速な対応が可能です。故障時は365日24時間対応の本社サービス情報センターで受付、サービスステーションまたは巡回中のサービスマンを速やかに現地へ派遣いたします。
                </p>
              </div>
            </div>
            <div class="block">
              <div class="block-img">
                <picture>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/safety_and_security_img_02.jpg')); ?>"
                    alt=""
                  />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">製造設置メーカーならではの<br class="pc">点検技術力</h2>
                <p>
                  創業以来約70年にわたって蓄積された技術とノウハウを持ったサービスマンによるメンテナンスを実施し、故障を未然に防ぎます。各サービスステーションには純正消耗部品を、本社、支店及びパーツセンターには重要部品を在庫し、緊急時には速やかな現場復旧を目指します。また、製作部品に関しても自社工場にて製造対応いたします。
                </p>
              </div>
            </div>
          </div>
          <div class="maintenance_ss_btn btn_wrap01">
            <a class="btn type-01" href="../ss/maintenance-agreement/index.html"><span>メンテナンス契約について</span></a>
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
    </main>
    <?php get_footer(); ?>