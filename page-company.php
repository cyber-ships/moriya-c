<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Company Information</small>企業情報</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/company/heading_img.jpg')); ?>" alt="企業情報" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li>企業情報</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- company_sub_page -->
      <section>
        <div class="inner">
          <div class="sub-page_list">
            <div class="block profile">
              <a href="./profile/index.html">
                <div class="ttl">会社概要<small>Company Profile</small></div>
              </a>
            </div>
            <div class="block message">
              <a href="./message/index.html">
                <div class="ttl">代表メッセージ<small>Message</small></div>
              </a>
            </div>
            <div class="block history">
              <a href="./history/index.html">
                <div class="ttl">沿革<small>History</small></div>
              </a>
            </div>
            <div class="block office">
              <a href="./office/index.html">
                <div class="ttl">事業所一覧<small>Office</small></div>
              </a>
            </div>
            <div class="block client">
              <a href="./client/index.html">
                <div class="ttl">主な取引先<small>Client</small></div>
              </a>
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
            <a class="btn type-02" href="../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
      <!-- /company_sub_page -->
    </main>

    <?php get_footer(); ?>
