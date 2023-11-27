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
                <li>
                  <a href="<?php echo home_url('/ir_news/') ?>">すべて</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_term_link('ir_cat-01','ir_news_category')) ?>">決算短信</a>
                </li>
                <li class="current">
                  <a href="<?php echo esc_url(get_term_link('ir_cat-02','ir_news_category')) ?>">適時開示</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_term_link('ir_cat-03','ir_news_category')) ?>">法定開示</a>
                </li>
                <li>
                  <a href="<?php echo esc_url(get_term_link('ir_cat-04','ir_news_category')) ?>">お知らせ</a>
                </li>
              </ul>
            </div>
            <div class="head_year">
              <div class="head_year_btn">すべて</div>
              <ul class="head_year_list">
                <li class="current">
                  <a href="">すべて</a>
                </li>
                <?php // 年別アーカイブリストを表示
                  $year=NULL; // 年の初期化
                  $args = array( // クエリの作成
                    'post_type' => 'ir_news', // 投稿タイプの指定
                    'orderby' => 'date', // 日付順で表示
                    'posts_per_page' => -1 // すべての投稿を表示
                  );
                  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
                    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
                      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
                        $year = get_the_date('Y'); // 年の取得
                        echo '<li><a href="'.home_url( '/', 'http' ).'ir_news/'.$year.'">'.$year.'年</a></li>'; // 年別アーカイブリストの表示
                      }
                    endwhile; // ループの終了
                    wp_reset_postdata(); // クエリのリセット
                  }
                ?>
              </ul>
            </div>
          </div>

          <div class="ir_info">
            <ul>
            <?php
              $term_object = get_queried_object();
              $term_slug = $term_object->slug;
              $args = array(
                'post_type' => 'ir_news',
                'posts_per_page' => 5,
                'taxonomy' => 'ir_news_category',
                'term' => $term_slug
              );
              $the_query = new WP_Query($args);
            ?>
            <?php if($the_query->have_posts()): ?>
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
              <li>
                <dl>
                  <dt>
                    <span class="date"><?php echo get_field('ir_date'); ?></span>

                    <?php if(is_object_in_term($post->ID,'ir_news_category','ir_cat-01')): ?>
                      <span class="cat">決算短信</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_news_category','ir_cat-02')) : ?>
                      <span class="cat">適時開示</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_news_category','ir_cat-03')) : ?>
                      <span class="cat">法定開示</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_news_category','ir_cat-04')) : ?>
                      <span class="cat">お知らせ</span>
                    <?php endif; ?>

                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="<?php echo get_field('ir_pdf'); ?>"
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
