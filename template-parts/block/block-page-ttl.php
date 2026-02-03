<?php

/**
 * Page Title Block Template
 */

// 1. 表示するタイトルの判定ロジック
$page_title = '';

if (is_404()) {
  $page_title = 'お探しのページがございません。404';
} elseif (is_page('contact-thanks')) {
  $page_title = 'お問い合わせありがとうございます。';
} else {
  $acf_title = get_field('display_title');
  if ($acf_title) {
    // 【重要】テキストエリアの改行を <br> に変換する
    // esc_htmlで安全を確保してから nl2br で改行を入れる
    $page_title = nl2br(esc_html($acf_title));
  } else {
    $page_title = esc_html(get_the_title());
  }
}
?>

<?php
// 1. まずACFから画像を取得（返り値が「URL」設定の場合）
$bg_img = get_field('page_ttl_bg');

// 2. もしACFが空なら、デフォルト画像のURLを入れる
if (!$bg_img) {
  // get_template_directory_uri() はテーマのルートURLを返します
  // /img/default-bg.jpg の部分は実際のファイル名に合わせて書き換えてください
  $bg_img = get_template_directory_uri() . '/img/page-ttl-img-common.png';
}

// 3. 最終的なURLを使ってstyle属性を作る
$style = ' style="background-image: url(' . esc_url($bg_img) . ');"';
?>


<div class="block-page-ttl" <?php echo $style; ?>>
  <div class="block-page-ttl__overlay"></div>
  <div class="block-page-ttl__content">
    <!-- <?php get_template_part('template-parts/block/block-breadcrumb'); ?> -->

    <h1 class="block-page-ttl__txt">
      <?php echo $page_title; ?> </h1>
  </div>
</div>