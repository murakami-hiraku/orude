  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-contact">
    <div class="page-contact__section section fadein">

      <div class="page-contact__inner inner">

        <div class="page-contact__container">
          <?php
          get_template_part('template-parts/parts/parts-bg-flower--white')
          ?>
          <h2 class="page-contact__ttl">お問い合わせ・お申込み</h2>

          <div class="page-contact__steps">
            <div class="page-contact__step page-contact__step--input">1.入力</div>
            <div class="page-contact__step page-contact__step--confirm">2.確認</div>
            <div class="page-contact__step page-contact__step--complete">3.完了</div>
          </div>

          <div class="page-contact__form">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>
  </main>


  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->