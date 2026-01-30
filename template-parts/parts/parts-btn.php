<?php

/**
 * @var array $args 呼び出し元から渡されるデータ
 */
$text = isset($args['text']) ? $args['text'] : '詳しく見る';
$link = isset($args['link']) ? $args['link'] : '#';
$class = isset($args['class']) ? $args['class'] : '';
// ＼追加！／ アイコンを表示するかどうかの判定（デフォルトはfalse）
$has_icon = isset($args['has_icon']) ? $args['has_icon'] : false;
?>

<div class="parts-btn <?php echo esc_attr($class); ?>">
  <a href="<?php echo esc_url($link); ?>" class="parts-btn__link">
    <?php if ($has_icon) : ?>
      <?php // もし $has_icon が true だったら span を表示する
      ?>
      <span class="link-icon"></span>
    <?php endif; ?>

    <?php echo esc_html($text); ?>

  </a>
</div>