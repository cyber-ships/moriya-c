<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Others</small>IR資料</span>
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
        <li class="bread_custom">IR資料</li>
      </ul>

      <!-- ir_library_others -->

      <section class="library_others">
        <div class="inner">
          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>ただいま掲載する事項はございません。</dt>
                  <dd></dd>
                </dl>
              </li>
            </ul>

            <div class="pager">
              <div class="pager_inner">
                <ul>
                  <li>
                    <a href="#">≪</a>
                  </li>
                  <li class="prev">
                    <a href="#">＜</a>
                  </li>
                  <li class="current">
                    <a href="#">1</a>
                  </li>
                  <li>
                    <a href="#">2</a>
                  </li>
                  <li>
                    <a href="#">3</a>
                  </li>
                  <li>
                    <a href="#">4</a>
                  </li>
                  <li>
                    <a href="#">5</a>
                  </li>
                  <li class="next">
                    <a href="#">＞</a>
                  </li>
                  <li>
                    <a href="#">≫</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="library_others_adobe">
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

          <div class="library_others_btn">
            <a href="../results/index.html" class="library_others_btn_item"
              >決算短信</a
            >
            <a href="../presentation/index.html" class="library_others_btn_item"
              >決算説明資料</a
            >
            <a href="../disclosure/index.html" class="library_others_btn_item"
              >適時開示資料</a
            >
            <a href="../securities/" class="library_others_btn_item"
              >有価証券報告書等法定開示資料</a
            >
            <a href="../others/index.html" class="library_others_btn_item"
              >IR資料</a
            >
            <a href="../meeting/index.html" class="library_others_btn_item"
              >株主総会関連資料</a
            >
          </div>
        </div>
      </section>

      <!-- /ir_library_others -->
    </main>

    <?php get_footer(); ?>
