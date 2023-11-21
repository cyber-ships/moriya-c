<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>IR News</small> IR ニュース</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="../../index.html">トップページ</a></li>
        <li><a href="../../ir/index.html">IR情報</a></li>
        <li>IRニュース</li>
      </ul>

      <!-- ir_news -->
      <section class="ir_news">
        <div class="inner">
          <div class="head_box">
            <div class="head_category">
              <ul>
                <li class="current">
                  <a href="">すべて</a>
                </li>
                <li>
                  <a href="">決算短信</a>
                </li>
                <li>
                  <a href="">適時開示</a>
                </li>
                <li>
                  <a href="">法定開示</a>
                </li>
                <li>
                  <a href="">お知らせ</a>
                </li>
              </ul>
            </div>
            <div class="head_year">
              <div class="head_year_btn">すべて</div>
              <ul class="head_year_list">
                <li class="current">
                  <a href="">すべて</a>
                </li>
                <li>
                  <a href="">2021年</a>
                </li>
                <li>
                  <a href="">2020年</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="ir_info">
            <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2023/08/23</span
                    ><span class="cat">お知らせ</span>
                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="https://contents.xj-storage.jp/xcontents/AS08769/ff35619d/8daa/4285/a982/9e8d9ffd39bb/140120230823545572.pdf"
                      target="_blank"
                      >人事移動に関するお知らせ</a
                    >
                  </dd>
                </dl>
              </li>

              <li>
                <dl>
                  <dt>
                    <span class="date">2023/08/21</span
                    ><span class="cat">お知らせ</span>
                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="https://contents.xj-storage.jp/xcontents/AS08769/c4fb509c/9742/4faf/bcdb/d86b113293b1/140120230821544756.pdf"
                      target="_blank"
                      >守谷輸送機工業、鳥浜製品管理センター移動</a
                    >
                  </dd>
                </dl>
              </li>

              <li>
                <dl>
                  <dt>
                    <span class="date">◯◯/◯/◯</span
                    ><span class="cat">適時開示</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="../news/message/index.html"
                      >◯◯◯◯××××について</a
                    >
                  </dd>
                </dl>
              </li>

              <li>
                <dl>
                  <dt>
                    <span class="date">◯◯/◯/◯</span
                    ><span class="cat">法定開示</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="../news/message/index.html"
                      >◯◯◯◯××××について</a
                    >
                  </dd>
                </dl>
              </li>

              <li>
                <dl>
                  <dt>
                    <span class="date">◯◯/◯/◯</span
                    ><span class="cat">IR資料</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="../news/message/index.html"
                      >◯◯◯◯××××について</a
                    >
                  </dd>
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
      <!-- /ir_news -->
    </main>

  <?php get_footer(); ?>
