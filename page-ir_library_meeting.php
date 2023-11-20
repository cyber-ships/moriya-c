<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Securities Reports</small>株主総会関連資料</span
            >
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="#">トップページ</a></li>
        <li><a href="../../../ir/index.html">IR情報</a></li>
        <li><a href="../../../ir/library/index.html">IRライブラリ</a></li>
        <li class="bread_custom">株主総会関連資料</li>
      </ul>

      <!-- ir_library_meeting -->

      <section class="library_meeting">
        <div class="inner">
          <div class="head_year">
            <p class="title">年度選択</p>
            <div class="head_year_btn">すべて</div>
            <ul class="head_year_list">
              <li class="current">
                <a href="">2023年3月期</a>
              </li>
              <li>
                <a href="">2022年3月期</a>
              </li>
              <li>
                <a href="">すべて</a>
              </li>
            </ul>
          </div>
          <h2 class="library_meeting_title">招集通知</h2>
          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/06/06</span>
                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="https://contents.xj-storage.jp/xcontents/AS08769/1805374a/b2ff/4e14/9bea/760822e7b46b/140120230605595814.pdf"
                      target="_blank"
                      >第76期定時株主総会招集通知及び株主総会資料</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">◯◯/◯/◯</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >2022年定時株主総会招集通知 インターネット開示事項</a
                    >
                  </dd>
                </dl>
              </li>
            </ul>
          </div>

          <h2 class="library_meeting_title">決議通知</h2>
          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/06/29</span>
                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="https://contents.xj-storage.jp/xcontents/AS08769/1928d496/2493/4536/9d65/022c5e441cfb/S100R8L6.pdf"
                      target="_blank"
                      >決議通知</a
                    >
                  </dd>
                </dl>
              </li>
            </ul>
          </div>

          <h2 class="library_meeting_title">株主通信</h2>
          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">◯◯/◯/◯</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="#"
                      >第76期中間事業報告書（2022年4月1日〜2022年9月30日）</a
                    >
                  </dd>
                </dl>
              </li>
            </ul>
          </div>

          <div class="library_meeting_adobe">
            <a href="https://get.adobe.com/jp/reader/" target="_blank"
              ><img src="<?php echo esc_url(get_theme_file_uri('/img/ir/adobe_logo.png')); ?>" alt=""
            /></a>
            <p>
              PDFファイルをご覧になるには最新のAdobe Acrobat
              Readerが必要となります。 Adobe Acrobat
              Readerはアドビシステムズのサイトより無償でダウンロードできます。
            </p>
          </div>

          <div class="library_meeting_btn">
            <a href="../results/index.html" class="library_meeting_btn_item"
              >決算短信</a
            >
            <a href="../presentation/index.html" class="library_meeting_btn_item"
              >決算説明資料</a
            >
            <a href="../disclosure/index.html" class="library_meeting_btn_item"
              >適時開示資料</a
            >
            <a href="../securities/" class="library_meeting_btn_item"
              >有価証券報告書等法定開示資料</a
            >
            <a href="../others/index.html" class="library_meeting_btn_item"
              >IR資料</a
            >
            <a href="../meeting/index.html" class="library_meeting_btn_item"
              >株主総会関連資料</a
            >
          </div>
        </div>
      </section>

      <!-- /ir_library_meeting -->
    </main>

    <?php get_footer(); ?>
