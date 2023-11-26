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
            <div class="inquiry_title">
              <h2>お問合わせ内容のご確認</h2>
            </div>
            <div class="inquiry_form">
              <p class="confirm-text">
                ご入力内容をご確認のうえ、「送信する」ボタンで送信してください。
              </p>
              <div class="form">
                <?php the_content(); ?>
                </div>

                <!-- <div class="btn-box confirm-btn">
                  <div class="btn_wrap01">
                    <a class="btn type-01 back" href="#"
                      ><span>お問合わせに戻る</span></a
                    >
                  </div>
                  <div class="btn_wrap01">
                    <a class="btn type-01" href="#"><span>送信する</span></a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

        <?php get_footer(); ?>