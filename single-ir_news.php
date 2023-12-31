<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>IR News</small>IR ニュース</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- ir_news_message -->
      <div class="news_message_bgc">
        <ul class="news_breadcrumbs">
          <li><a href="/">トップページ</a></li>
          <li><a href="/ir/">IR情報</a></li>
          <li><a href="/ir_news/">IRニュース</a></li>
          <li><?php the_title(); ?></li>
        </ul>
        <section class="ir_news_message">
          <div class="inner">
            <span class="ir_news_message_sub">NEW</span>
            <h2 class="ir_news_message_title"><?php the_title(); ?></h2>
            <p class="ir_news_message_copy"><?php echo get_field('ir_date'); ?></p>
            <div class="ir_news_message_img">
              <img src="<?php echo esc_url(get_theme_file_uri('/img/contact_bg.jpg')); ?>" alt="" />
            </div>
            <p class="ir_news_message_text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキスト<br />
              <span><a href="#">PDFリンク</a></span
              ><br />
              テキストテキストテキストテキストテキストテキストテキストテキスト<br />
              テキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </section>
      </div>

      <section>
        <div class="inner">
          <div class="btn_wrap01">
            <a class="btn type-01 back" href="/ir_news/"
              ><span>IR ニュース一覧に戻る </span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_news_message -->
    </main>

    <?php get_footer(); ?>
