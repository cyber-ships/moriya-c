<?php get_header(); ?>


    <main>
      <section class="page_heading achievements">
        <div class="inner">
          <h1>
            <span class="text"><small>Achievements</small>施工・納入実績</span>
            <picture>
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/heading_img.jpg"
                alt="施工・納入実績"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li>施工・納入実績</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="page_works">
        <div class="inner">
          <div class="head_box">
            <div class="head_category">
              <p class="title">製品選択</p>
              <ul>
                <li>
                  <a href="<?php echo home_url('/works/'); ?>">すべて</a>
                </li>
                <li class="current">
                  <a href="<?php echo esc_url( get_term_link( 2 , 'works_category' )); ?>">エレベーター</a>
                </li>
                <li>
                  <a href="<?php echo esc_url( get_term_link( 5 , 'works_category' )); ?>">船舶用</a>
                </li>
                <li>
                  <a href="<?php echo esc_url( get_term_link( 3 , 'works_category' )); ?>">マックリフター</a>
                </li>
                <li>
                  <a href="<?php echo esc_url( get_term_link( 4 , 'works_category' )); ?>">リニューアル（入替）</a>
                </li>
              </ul>
            </div>
            <div class="head_year">
              <p class="title">年度選択</p>
              <div class="head_year_btn">すべて</div>
              <ul class="head_year_list">
                <li class="current">
                  <a href="">すべて</a>
                </li>
                <?php // 年別アーカイブリストを表示
                  $year=NULL; // 年の初期化
                  $args = array( // クエリの作成
                    'post_type' => 'works', // 投稿タイプの指定
                    'orderby' => 'date', // 日付順で表示
                    'posts_per_page' => -1 // すべての投稿を表示
                  );
                  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
                    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
                      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
                        $year = get_the_date('Y'); // 年の取得
                        echo '<li><a href="'.home_url( '/', 'http' ).'works/'.$year.'">'.$year.'年</a></li>'; // 年別アーカイブリストの表示
                      }
                    endwhile; // ループの終了
                    wp_reset_postdata(); // クエリのリセット
                  }
                ?>
              </ul>
            </div>
          </div>

          <div class="works_archive">
            <div class="works_archive__wrap">
              <ul class="works_archive_list">
              <?php
                  $term_object = get_queried_object();
                  $term_slug = $term_object->slug;
                  $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 12,
                    'taxonomy' => 'works_category',
                    'term' => $term_slug
                  );
                  $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                  <?php while($the_query->have_posts()): $the_query->the_post(); ?>

                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="thumbnail">
                        <img src="<?php echo get_field('works_img'); ?>" alt="" />
                      </div>
                      <div class="box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/works/arrow.png" alt="" class="arrow" />

                            <?php if(is_object_in_term($post->ID,'works_category','works_cat-01')): ?>
                              <span class="tag-category tag-category-01">エレベーター</span>
                            <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-02')) : ?>
                              <span class="tag-category tag-category-03">船舶</span>
                            <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-03')) : ?>
                              <span class="tag-category tag-category-02">マックリフター</span>
                            <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-04')) : ?>
                              <span class="tag-category tag-category-01">リニューアル（入れ替え）</span>
                            <?php endif; ?>


                        <h2 class="title"><?php the_title(); ?></h2>
                        <span class="year"><?php echo get_field('works_year'); ?></span>
                      </div>
                    </a>
                  </li>

                  <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
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
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact_ttl.svg" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>