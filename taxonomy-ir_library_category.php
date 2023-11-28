<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>IR Library </small>IRライブラリ</span>
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
        <li>IRライブラリ</li>
      </ul>

      <!-- ir_library -->
      <section class="ir_library">
        <div class="inner">
          <h2 class="ir_library_title">最新情報</h2>
          <div class="ir_info">
            <ul>
            <?php 
                $query = new WP_Query(array(
                  'post_type' => "ir_library",
                  'posts_per_page' => 1,
                  'paged' => get_query_var('paged')
                ));
                if($query->have_posts()){
                  while($query->have_posts()){
                    $query->the_post();
              ?>
              <li>
                <dl>
                  <dt>
                    <span class="date"><?php echo get_field('library_date'); ?></span>

                    <?php if(is_object_in_term($post->ID,'ir_library_category','library_cat-01')): ?>
                      <span class="cat">決算短信</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-02')) : ?>
                      <span class="cat">決算説明</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-03')) : ?>
                      <span class="cat">有価証券</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-04')) : ?>
                      <span class="cat">株主総会</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-05')) : ?>
                      <span class="cat">その他</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-06')) : ?>
                      <span class="cat">適時開示</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-07')) : ?>
                      <span class="cat">ガバナンス</span>
                    <?php endif; ?>

                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="<?php echo get_field('library_pdf'); ?>"
                      target="_blank"
                      ><?php the_title(); ?></a
                    >
                  </dd>
                </dl>
              </li>
              <?php
                }
                }
                wp_reset_postdata();
              ?>
            </ul>
          </div>

          <div class="ir_library_box">
            <div class="ir_library_box_content">
            <?php
        $categories = array('library_cat-01');  // カテゴリのスラッグを追加してください

        foreach ($categories as $category) {
            $category_query = new WP_Query(array(
                'post_type' => 'ir_library',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'ir_library_category',
                        'field' => 'slug',
                        'terms' => $category,
                    ),
                ),
                'posts_per_page' => 1,
                'paged' => get_query_var('paged')
            ));

            if ($category_query->have_posts()) {
                while ($category_query->have_posts()) {
                    $category_query->the_post();
    ?>
              <p class="ir_library_box_content_title">決算短信</p>
              <p class="ir_library_box_content_date">2023/08/09</p>
              <a
                href="https://contents.xj-storage.jp/xcontents/AS08769/07e6e0a8/eb69/41cf/9d73/5532aa498111/140120230809538365.pdf"
                target="_blank"
                class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/results/index.html"
                  class="ir_library_box_content_link"
                  >決算短信一覧</a
                >
              </div>
              <?php
                }
                wp_reset_postdata();
            }
        }
    ?>
            </div>

            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">決算説明資料</p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >2023年3月期 第2四半期決算説明資料<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/presentation/"
                  class="ir_library_box_content_link"
                  >決算説明資料一覧</a
                >
              </div>
            </div>
            
            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">適時開示情報</p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >実績予想の修正に関するお知らせ<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/disclosure/index.html"
                  class="ir_library_box_content_link"
                  >適時開示情報一覧</a
                >
              </div>
            </div>

            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">
                有価証券報告書等法定開示資料
              </p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >2023年3月期 第2四半期短信[日本基準]（非連結）<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/securities/"
                  class="ir_library_box_content_link"
                  >有価証券報告書等法定開示資料一覧</a
                >
              </div>
            </div>

            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">IR資料</p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >会社説明資料（2022年11月）<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/others/index.html"
                  class="ir_library_box_content_link"
                  >IR資料一覧</a
                >
              </div>
            </div>
            
            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">株主総会関連資料</p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >決議通知<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/meeting/index.html"
                  class="ir_library_box_content_link"
                  >株主総会関連資料一覧</a
                >
              </div>
            </div>

            <div class="ir_library_box_content">
              <p class="ir_library_box_content_title">
                コーポレート・ガバナンス一覧
              </p>
              <p class="ir_library_box_content_date">◯◯/◯/◯</p>
              <a href="#" class="ir_library_box_content_pdf"
                >コーポレート・ガバナンスに関する報告書2022/10/18<span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="../library/governance/index.html"
                  class="ir_library_box_content_link"
                  >コーポレート・ガバナンス報告書一覧</a
                >
              </div>
            </div>
          </div>

          <div class="ir_library_adobe">
            <a href="https://get.adobe.com/jp/reader/" target="_blank"
              ><img src="<?php echo esc_url(get_theme_file_uri('/img/ir/adobe_logo.png')); ?>" alt=""
            /></a>
            <p>
              PDFファイルをご覧になるには最新のAdobe Acrobat
              Readerが必要となります。 Adobe Acrobat
              Readerはアドビシステムズのサイトより無償でダウンロードできます。
            </p>
          </div>

          <div class="btn_wrap05">
            <a class="btn type-05" href="../../ir/finance_info/index.html"
              ><span>業績・財務情報</span></a
            >
            <a class="btn type-05" href="../../ir/index.html"
              ><span>IR情報 </span></a
            >
            <a class="btn type-05" href="../../ir/stock_info/index.html"
              ><span>株式情報</span></a
            >
            <a class="btn type-05" href="../../ir/others/index.html"
              ><span>その他情報</span></a
            >
            <a class="btn type-05" href="../../ir/notice/index.html"
              ><span>電子公告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_library -->
    </main>

    <?php get_footer(); ?>
