<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="front-page">
  <!-- <div class="links">

      <a class="link cremation" href="<?php echo home_url('/service-cremation'); ?>"><span class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fv-link-img-1.png" alt=""></span>
        <p class="link-txt">
          火葬ご希望の方はこちら</p><span class="icon-arrow"></span>
      </a>

      <a class="link ceremony" href="<?php echo home_url('/service-ceremony'); ?>"><span class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fv-link-img-2.png" alt=""></span>
        <p class="link-txt">ゆっくりお別れをしたい方はこちら</p><span class="icon-arrow"></span>
      </a>

      <a class="link perpetual-care" href="<?php echo home_url('/service-perpetual-care'); ?>"><span class="link-img"><img src="<?php echo get_template_directory_uri(); ?>/img/fv-link-img-3.png" alt=""></span>
        <p class="link-txt">永代供養ご希望の方はこちら</p><span class="icon-arrow"></span>
      </a>

    </div> -->
  <!-- ファーストビュー(fv) -->
  <?php get_template_part('template-parts/front-page/section-fv'); ?>
  <!-- /ファーストビュー(fv) -->

  <!-- お知らせ（news） -->
  <?php get_template_part('template-parts/section/section-news'); ?>
  <!-- /お知らせ（news） -->


  <!-- 私たちの想い（concept） -->
  <?php get_template_part('template-parts/front-page/section-concept'); ?>
  <!-- /私たちの想い（concept） -->

  <!-- 大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->
  <?php get_template_part('template-parts/front-page/section-service'); ?>
  <!-- /大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->

  <!-- ご利用の流れ（introduce） -->
  <?php get_template_part('template-parts/front-page/section-introduce'); ?>
  <!-- /ご利用の流れ（introduce） -->

  <!-- 画像付きお知らせ（news-image） -->
  <?php get_template_part('template-parts/section/section-news-image'); ?>
  <!-- /画像付きお知らせ（news-image） -->


  <!-- コンタクト（contact） -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト（contact） -->

  <!-- スマホ専用固定ボタン -->
  <?php get_template_part('template-parts/parts/parts-fix-button'); ?>
  <!-- /スマホ専用固定ボタン -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->