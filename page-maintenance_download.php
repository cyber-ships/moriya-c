<?php get_header(); ?>

    <main>
      <section class="page_heading maintenance">
        <div class="inner">
          <h1>
            <span class="text"><small>Download</small>各種書類一覧</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/heading_img.jpg')); ?>"
                alt="各種書類一覧"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../../../../index.html">トップページ</a></li>
        <li><a href="../../../../maintenance/index.html">メンテンナンス</a></li>
        <li class="bread_custom">
          <a href="../../../conservative-info/technicalinformation/index.html">プランジャー測定 対象エレベーターの技術</a>
        </li>
        <li class="bread_custom">各種書類一覧</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="maintenance_download">
        <div class="inner">
          <h3 class="maintenance_download_title">
            各種書類一覧<br class="sp" /><span
              class="maintenance_download_small"
            >
              以下のPDFボタンより各書類をご確認、ダウンロードいただけます。
            </span>
          </h3>
          <div class="maintenance_download_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/02/14</span
                    ><span class="cat">NEW</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >「網者溝の摩耗限界基準（一覧表） 」</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt><span class="date">2023/02/13</span></dt>
                  <dd>
                    <a class="pdf" href="#"
                      >「ブレーキパッド残存厚み判定基準 寸法と 測定方 法」</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt><span class="date">2022/12/16</span></dt>
                  <dd>
                    <a class="pdf" href="#"
                      >「プランジャー測定対象エレベータ ーの技 術情報 」</a
                    >
                  </dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="maintenance_adobe">
        <div class="inner">
          <div class="maintenance_adobe_box">
            <a href="https://get.adobe.com/jp/reader/" target="_blank"
              ><img src="<?php echo esc_url(get_theme_file_uri('/img/ir/adobe_logo.png')); ?>" alt=""
            /></a>
            <p>
              PDFファイルをご覧になるには最新のAdobe Acrobat
              Readerが必要となります。 Adobe Acrobat
              Readerはアドビシステムズのサイトより無償でダウンロードできます。
            </p>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/contact_ttl.svg')); ?>" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../../../../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>