  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="front-page">

    <!-- ファーストビュー(fv) -->
    <?php get_template_part('template-parts/front-page/section-fv'); ?>
    <!-- /ファーストビュー(fv) -->

    <!-- 私たちの想い（concept） -->
    <?php get_template_part('template-parts/front-page/section-concept'); ?>
    <!-- /私たちの想い（concept） -->

    <!-- 大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->
    <?php get_template_part('template-parts/front-page/section-service'); ?>
    <!-- /大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->

    <!-- ご利用の流れ（introduce） -->
    <?php get_template_part('template-parts/front-page/section-introduce'); ?>
    <!-- /ご利用の流れ（introduce） -->

    <!-- コンタクト（contact） -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト（contact） -->

  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->