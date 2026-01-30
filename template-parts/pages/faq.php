<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-faq">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="page-faq__section section fadein">

    <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>

    <div class="page-faq__inner inner">

      <div class="page-faq__contents">
        <div class="page-faq__category cremation">
          <h2 class="page-faq__ttl">プレミアム訪問ペット火葬<span class="hidden-sp">サービス</span>に関するご質問</h2>
          <?php
          get_template_part('template-parts/parts/parts-faq-1')
          ?>
        </div>
        <div class="page-faq__category funeral">
          <h2 class="page-faq__ttl">ペット葬儀・セレモニーに関するご質問</h2>
          <?php
          get_template_part('template-parts/parts/parts-faq-2')
          ?>
        </div>
        <div class="page-faq__category perpetual-care">
          <h2 class="page-faq__ttl">人とペットの永代供養サービスに関するご質問</h2>
          <?php
          get_template_part('template-parts/parts/parts-faq-3')
          ?>
        </div>
      </div>

    </div>

  </section>

  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->