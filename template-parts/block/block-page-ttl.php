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
  // 入力値の前後の空白を削除し、小文字に統一して判定（「none」「None」「none 」対策）
  if ($acf_title && strtolower(trim($acf_title)) === 'none') {
    $page_title = ''; // 文字を非表示（空）にする
  } elseif ($acf_title) {    // 【重要】テキストエリアの改行を <br> に変換する
    // esc_htmlで安全を確保してから nl2br で改行を入れる
    $page_title = nl2br(esc_html($acf_title));
  } elseif (!empty($args['title'])) {
    // テンプレート側から直接タイトルを渡す場合（ACF未入力時のフォールバック）
    $page_title = wp_kses_post($args['title']);
  } else {
    $page_title = esc_html(get_the_title());
  }
}
?>

<?php
// 1. まずACFから画像を取得（返り値が「URL」設定の場合）
$bg_img = get_field('page_ttl_bg');

// 2. ACFが空で、テンプレート側から背景画像が渡されていればそれを使う
if (!$bg_img && !empty($args['bg'])) {
  $bg_img = $args['bg'];
}

// 3. それでも空なら、デフォルト画像のURLを入れる
if (!$bg_img) {
  // get_template_directory_uri() はテーマのルートURLを返します
  // /img/default-bg.jpg の部分は実際のファイル名に合わせて書き換えてください
  $bg_img = get_template_directory_uri() . '/img/common/page-ttl-img-common.png';
}

// 4. 最終的なURLを使ってstyle属性を作る
$style = ' style="background-image: url(' . esc_url($bg_img) . ');"';
?>


<div class="block-page-ttl" <?php echo $style; ?>>
  <div class="block-page-ttl__overlay"></div>
  <div class="block-page-ttl__content">
    <h1 class="block-page-ttl__txt">
      <?php echo $page_title; ?> </h1>
  </div>
</div>