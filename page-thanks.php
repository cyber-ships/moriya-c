<?php get_header(); ?>

    <main>
      <section class="page_heading inquiry">
        <div class="inner">
          <h1>
            <span class="text"><small>Inquiry</small>お問合わせ</span>
            <picture>
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/inquiry/heading_img.jpg"
                alt="お問合わせ"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../../index.html">トップページ</a></li>
        <li>お問合わせ</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="page_inquiry">
        <div class="inner">
          <div class="inquiry_box">
            <div class="inquiry_form">
              <div class="thanks_box">
                <h3>お問合わせありがとうございました</h3>
                <p>
                  お問合わせ内容が送信されました。<br />担当よりご連絡いたしますので、<br
                    class="sp"
                  />今しばらくお待ちください。
                </p>
              </div>
              <div class="btn_wrap01">
                <a class="btn type-01 back" href="<?php echo home_url(); ?>"
                  ><span>トップページに戻る</span></a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>