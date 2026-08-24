  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-goods">
    <?php
    get_template_part('template-parts/block/block-page-ttl')
    ?>

    <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-goods__section page-goods__section--1 section fadein ">
      <div class="page-goods__inner inner">
        <?php
        get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
        <div class="page-goods__container">
          <div class="page-goods__box">
            <h2 class="page-goods__ttl"></h2>
            <p class="page-goods__txt"></p>
          </div>
        </div>
      </div>

    </section>
    <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->


    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->


  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->