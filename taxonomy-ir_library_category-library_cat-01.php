<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Financial Results</small>決算短信</span>
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
        <li>決算短信</li>
      </ul>

      <!-- ir_library_results -->

      <section class="library_results">
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
          <h2 class="ttl_s">決算短信</h2>
          <div class="ir_info">
            <ul>
            <?php
                  $term_object = get_queried_object();
                  $term_slug = $term_object->slug;
                  $args = array(
                    'post_type' => 'ir_library',
                    'posts_per_page' => 10,
                    'taxonomy' => 'ir_library_category',
                    'term' => $term_slug
                  );
                  $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                  <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <li>
                <dl>
                  <dt>
                    <span class="date"><?php echo get_field('library_date'); ?></span>
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

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </ul>

            <div class="pager">
              <div class="pager_inner">
              <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                  } ?>
              </div>
            </div>

            <div class="library_results_adobe">
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

          <div class="library_results_btn">
            <a href="<?php echo esc_url(get_term_link('library_cat-01','ir_library_category')) ?>" class="library_results_btn_item"
              >決算短信</a
            >
            <a href="<?php echo esc_url(get_term_link('library_cat-02','ir_library_category')) ?>" class="library_results_btn_item"
              >決算説明資料</a
            >
            <a href="<?php echo esc_url(get_term_link('library_cat-03','ir_library_category')) ?>" class="library_results_btn_item"
              >適時開示資料</a
            >
            <a href="<?php echo esc_url(get_term_link('library_cat-04','ir_library_category')) ?>" class="library_results_btn_item"
              >有価証券報告書等法定開示資料</a
            >
            <a href="<?php echo esc_url(get_term_link('library_cat-05','ir_library_category')) ?>" class="library_results_btn_item"
              >IR資料</a
            >
            <a href="<?php echo esc_url(get_term_link('library_cat-06','ir_library_category')) ?>" class="library_results_btn_item"
              >株主総会関連資料</a
            >
          </div>
        </div>
      </section>

      <!-- /ir_library_results -->
    </main>

    <?php get_footer(); ?>