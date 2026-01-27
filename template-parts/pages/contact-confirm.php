  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-contact page-contact-confirm">

    <div class="page-contact__section page-contact-confirm__section section fadein">

      <div class="page-contact__inner page-contact-confirm__inner inner">

        <div class="page-contact__container page-contact-confirm__container">
          <?php
          get_template_part('template-parts/parts/parts-bg-flower--white')
          ?>

          <?php get_template_part('template-parts/parts/parts-page-contact-ttl', null, array('step' => '確認')); ?>

          <?php
          get_template_part('template-parts/parts/parts-page-contact-steps')
          ?>
          <div class="page-contact__form page-contact-confirm__form">
            <?php the_content(); ?>
          </div>

        </div>
      </div>
    </div>

  </main>


  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->