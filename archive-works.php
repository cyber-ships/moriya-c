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
                <li class="current">
                  <a href="<?php echo home_url('/works/'); ?>">すべて</a>
                </li>
                <li>
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
              <?php
                wp_get_archives (array(
                  'type' => 'yearly', //表示するアーカイブの種類
                  'limit' => -1, //取得する件数
                  'format' => 'html', //アーカイブの表示形式
                  'before' => '', //formatがhtmlまたはcustomのとき、aタグの直前に付けるテキスト（htmlタグ可）
                  'after' => '', //formatがhtmlまたはcustomのとき、aタグの直後に付けるテキスト（htmlタグ可）
                  'show_post_count' => false, //投稿数を表示するか
                  'echo' => 1, //表示するか（1）、値を返すか（0）
                  'order' => 'DESC', //項目をどの方向に並べるか
                  'post_type' => 'works' //アーカイブを取得する投稿タイプ
                ));
                ?>
                </ul>
              </div>
          </div>

          <div class="works_archive">
            <div class="works_archive__wrap">
              <ul class="works_archive_list">
                <?php
                    $query = new WP_Query(array(
                    'post_type' => "works",
                    'posts_per_page' => 9, //表示件数
                    'paged' => get_query_var('paged')
                    ));
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                ?>
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
                <?php
                  }
                  }
                  wp_reset_postdata();
              ?>
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