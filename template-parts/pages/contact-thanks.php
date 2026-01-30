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

        <div class="page-contact-thanks__link">
          <p class="page-contact-thanks__link-txt">分からないことは、公式LINEで気軽にご相談ください。<br class="br-1">状況に合わせて、必要な手順をご案内します。<br class="br-2">友だち追加はこちら。</p>
          <a href="" class="section-contact__link line"><span class="link-icon"></span>LINEでのお問い合わせ</a>
        </div>
      </div>
    </div>

  </main>


  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->