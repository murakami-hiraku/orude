  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="front-page">

    <!-- ファーストビュー -->
    <?php get_template_part('template-parts/front-page/section-fv'); ?>
    <!-- /ファーストビュー -->

    <!-- メッセージ -->
    <?php get_template_part('template-parts/front-page/section-message'); ?>
    <!-- /メッセージ -->

    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->

  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->