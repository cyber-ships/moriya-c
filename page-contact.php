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
        <li><a href="../index.html">トップページ</a></li>
        <li>お問合わせ</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="page_inquiry">
        <div class="inner">
          <p class="ttl_m inquiry__mt">
            この度は、「守谷輸送機工業」<br />ホームページにお越しいただき、<br
              class="sp"
            />誠にありがとうございます。<br />お問合わせにつきましては、<br />
            メールフォームより<br class="sp" />お気軽にご連絡ください。
          </p>
          <div class="inquiry_box">
            <div class="inquiry_title inquiry__mb">
              <h2>メールでのお問合わせ</h2>
              <p>下記のフォームにご記入の上、確認・送信してください。</p>
            </div>
            <div class="inquiry_form">
              <div class="form">
              <?php the_content();?>
              </div>
            </div>

            <div class="inquiry__bottom">
              <p class="ttl_m">
                お電話でのお問合わせも<br
                  class="sp"
                />承っております。<br />下記より、ご用件に該当する<br
                  class="sp"
                />お問合わせ先へお電話ください。
              </p>
              <div class="inquiry_title">
                <h2>お電話でのお問合わせ</h2>
                <div class="tel-box">
                  <a href="tel:0362283460">
                    <p class="text">
                      荷物用エレベーターの<br class="sp"/>新設に関するお問合わせ
                    </p>
                    <p class="tel">03-6228-3460</p>
                  </a>
                  <a href="tel:0457853811">
                    <p class="text">荷物用エレベーターのサービス・<br/>リニューアルに関するお問合わせ</p>
                    <p class="tel">045-785-3811</p>
                  </a>
                  <a href="tel:0457853111">
                    <p class="text">
                      総務・採用に関するお問合わせ
                    </p>
                    <p class="tel">045-785-3111</p>
                  </a>
                  <a href="tel:0457853704">
                    <p class="text">船舶用エレベーターの新設・<br/>サービスに関するお問合わせ</p>
                    <p class="tel">045-785-3704</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>