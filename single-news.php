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

      <!-- news_detail -->
      <div class="detail_bgc">
        <ul class="news_breadcrumbs">
          <li><a href="../../index.html">トップページ</a></li>
          <li><a href="../../news/index.html">お知らせ</a></li>
          <li>タイトルタイトルタイトル</li>
        </ul>
        <section class="news_detail">
          <div class="inner">
          <?php $value = get_post_meta($post->ID, 'news_new', true);?>
          <?php if(empty($value)):?>
          <?php else:?>
            <span class="news_detail_sub">NEW</span>
          <?php endif;?>
            <h2 class="news_detail_title"><?php the_title(); ?></h2>
            <p class="news_detail_copy"><?php echo get_post_time('Y/m/d D.'); ?></p>
            <div class="news_detail_img">
              <img src="../../img/contact_bg.jpg" alt="" />
            </div>
            <p class="news_detail_text">
              <?php the_content(); ?>
            </p>
          </div>
        </section>
      </div>
      <section>
        <div class="inner">
          <div class="btn_wrap01">
            <a class="btn type-01 back" href="<?php echo home_url('/news/'); ?>"
              ><span>ニュース一覧に戻る</span></a
            >
          </div>
        </div>
      </section>
      <!-- /news_detail -->
    </main>

    <?php get_footer(); ?>