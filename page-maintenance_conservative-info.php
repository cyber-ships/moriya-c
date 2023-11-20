<?php get_header(); ?>


    <main>
      <section class="page_heading maintenance">
        <div class="inner">
          <h1>
            <span class="text"><small>Conservative Info</small>保守・技術情報</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/heading_img.jpg')); ?>"
                alt="保守・技術情報"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../../index.html">トップページ</a></li>
        <li><a href="../../maintenance/index.html">メンテンナンス</a></li>
        <li>保守・技術情報</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="conservative-info_title">
        <div class="inner">
          <h2 class="ttl_l">
            保守・技術情報
            <span>Conservative Info</span>
          </h2>
          <p class="lead">
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキスト
          </p>
        </div>
      </section>

      <section class="conservative-info">
        <div class="inner">
          <div class="block_type_01">
            <div class="block">
              <div class="block-img">
                <picture>
                  <img
                    src="<?php echo esc_url(get_theme_file_uri('/assets/img/maintenance/ss/safety_and_security_img_02.jpg')); ?>"
                    alt=""
                  />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">エレベーターの<br />保守点検</h2>
                <p>
                  エレベーターの安全は適切な保守点検により確保されております。<br />毎月の点検による機器の状態確認や結果に基づき調整や修理を実施し、事故や故障を未然に防ぐ措置を講ずることこそが、保守点検の本質と考えております。<br />弊社においては、社内講習を受け、安全装置・各種機構を熟知したサービスマンによる保守体制を構築しており、最善の保守点検作業を行います。
                </p>
              </div>
            </div>
            <div class="btn_wrap02">
              <a
                class="btn type-01"
                href="../../maintenance/conservative-info/periodicinspection/index.html"
                ><span>定期検査情報</span></a
              >
              <a
                class="btn type-01"
                href="../../maintenance/conservative-info/technicalinformation/index.html"
                ><span
                  >プランジャー測定対象<br />エレベーターの技術情報</span
                ></a
              >
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
    </main>
    <?php get_footer(); ?>