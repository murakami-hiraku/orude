<!-- ペットちゃんがお亡くなりになったら（introduce） -->
<section class="section-introduce section">

  <div class="section-introduce__inner inner">

    <h2 class="section-introduce__ttl">ペットちゃんがお亡くなりになったら</h2>

    <div class="section-introduce__content">
      <div class="section-introduce__img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/concept-img-left.png" alt="">
      </div>

      <div class="section-introduce__body">
        <p class="section-introduce__txt">「その時」が訪れたとき、どうすればいいのか分からず戸惑ってしまう方も少なくありません。 大切なご家族を安らかに送り出すために、すぐにできること、してあげたいことをわかりやすくご案内しています。</p>
        <?php get_template_part('parts-button', null, [
          'text'  => '',
          'link'  => '/introduce/',
          'class' => '' // 色を変えたい時などの識別用クラス
        ]); ?>
      </div>
    </div>
  </div>

</section>
<!-- /ペットちゃんがお亡くなりになったら（guide） -->