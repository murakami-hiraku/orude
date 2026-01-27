  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-contact-confirm">

    <div class="page-contact-confirm__section section fadein">

      <div class="page-contact-confirm__inner inner">

        <div class="page-contact-confirm__container">
          <?php
          get_template_part('template-parts/parts/parts-bg-flower--white')
          ?>
          <h2 class="page-contact-confirm__ttl">お問い合わせ・お申込み</h2>

          <?php
          get_template_part('template-parts/parts/parts-page-contact-steps')
          ?>
          <div class="page-contact-confirm__form">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>

  </main>


  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->