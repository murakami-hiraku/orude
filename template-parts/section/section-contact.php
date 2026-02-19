<!-- コンタクト -->
<section class="section-contact section fadein">

  <div class="section-contact__wrap">
    <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>

    <div class="section-contact__inner inner">

      <div class="section-contact__info-box">
        <h1 class="section-contact__ttl">お問い合わせ</h1>
        <?php get_template_part('template-parts/block/block-info--primary'); ?>

      </div>

      <div class="section-contact__link-box">
        <div class="section-contact__links">
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text'     => 'メールでのお問い合わせ',
            'has_icon' => true, // これでspanが表示される
            'class'    => 'sec-contact sec-contact-mail',
            'link' => home_url('/contact/'), // リンク先を指定
          ]); ?>
          <div class="link-line"></div>
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text'     => 'LINEでのお問い合わせ',
            'has_icon' => true, // これでspanが表示される
            'class'    => 'sec-contact sec-contact-line',
            'link' => 'https://lin.ee/HSE92oT',
          ]); ?>
        </div>
        <p class="section-contact__txt">
          お支払いは、現金またはクレジットカードでの<br class="hidden-tb">ご精算となります。</p>

        <div class="section-contact__card-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/contact-card-logo.png" alt="">
        </div>

      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/img/contact-img.png" alt="" class="section-contact__img">


    </div>
    <div class="section-contact__bg-txt-wrap" aria-hidden="true">
      <span class="section-contact__bg-txt">-May the journey ahead be a peaceful one.-</span>
      <span class="section-contact__bg-txt">-May the journey ahead be a peaceful one.-</span>
    </div>
  </div>

</section>
<!-- /コンタクト -->