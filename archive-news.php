<?php get_header(); ?>


    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>News</small>お知らせ</span>
            <picture>
              <img src="<?php echo get_template_directory_uri(); ?>/img/news/heading_img.jpg" alt="企業情報" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li>お知らせ</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- news -->
      <section>
        <div class="inner">
          <h2 class="ttl_s">お知らせ</h2>
          <div class="news">
            <!-- <ul>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/12/26</span
                    ><span class="cat">NEW</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="./detail/index.html"
                      >「テクニカルセンター」オフィス紹介動画を公開</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/12/20</span
                    ><span class="cat">NEW</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="./detail/index.html"
                      >「2024年卒・冬季１DAYインターンシップ」開催のお知らせ</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/10/12</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html">横浜駅東口に新オフィス開設</a>
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/15</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >（仮称）鳥浜工場着工のお知らせ</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a class="pdf" href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/09/01</span>
                  </dt>
                  <dd>
                    <a href="./detail/index.html"
                      >お知らせのタイトルが入りますお知らせのタイトルが入ります</a
                    >
                  </dd>
                </dl>
              </li>
            </ul> -->
            <ul>
            <?php
                  $query = new WP_Query(array(
                  'post_type' => "news",
                  'posts_per_page' => 10, //表示件数
                  'paged' => get_query_var('paged')
                  ));
                  if($query->have_posts()){
                  while($query->have_posts()){
                  $query->the_post();
              ?>
              
              <li>
                <dl>
                  <dt>
                    <span class="date">2022/12/20</span>
                    <?php $value = get_post_meta($post->ID, 'news_new', true);?>
                    <?php if(empty($value)):?>
                    <?php else:?>
                      <span class="cat">NEW</span>
                    <?php endif;?>
                  </dt>
                  <dd>
                  <?php $value = get_post_meta($post->ID, 'news_pdf', true);?>
                <?php if(empty($value)):?>
									<!-- 空欄の時 -->
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                    <?php else:?>
                      <!-- それ以外 -->
                      <a class="pdf" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <?php endif;?>
                  </dd>
                </dl>
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
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="../img/contact_ttl.svg" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
      <!-- /news -->
    </main>

    <?php get_footer(); ?>