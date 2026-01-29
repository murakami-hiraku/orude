<?php

/**
 * @var array $args 呼び出し元から渡されるデータ
 */
$text = isset($args['text']) ? $args['text'] : '詳しく見る'; // デフォルト値
$link = isset($args['link']) ? $args['link'] : '#';
$class = isset($args['class']) ? $args['class'] : '';
?>

<div class="parts-btn <?php echo esc_attr($class); ?>">
  <a href="<?php echo esc_url($link); ?>" class="parts-btn__link">
    <?php echo esc_html($text); ?>
  </a>
</div>