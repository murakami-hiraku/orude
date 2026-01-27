  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-contact page-contact-thanks">

    <div class="page-contact__section page-contact-thanks__section section fadein">

      <div class="page-contact__inner page-contact-thanks__inner inner">

        <div class="page-contact__container page-contact-thanks__container">
          <?php
          get_template_part('template-parts/parts/parts-bg-flower--white')
          ?>

          <?php
          get_template_part('template-parts/parts/parts-page-contact-ttl', null, array(
            'step' => '<br class="hidden-pc">ありがとうございました。'
          ));
          ?>

          <?php
          get_template_part('template-parts/parts/parts-page-contact-steps')
          ?>
          <p class="page-contact page-contact-thanks__txt">お問い合わせいただき誠にありがとうございます<br>営業担当のものから追って、ご連絡いたしますので、<br>少々お時間いただけますと幸いです。</p>
        </div>
      </div>
    </div>

  </main>


  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->