<!-- お知らせ -->
<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'orderby' => 'date',
  'order' => 'DESC',
);
$news_query = new WP_Query($args);
?>

<section class="section-news section fadein">
  <div class="section-news__inner inner">
    <h2 class="section-news__ttl">お知らせ</h2>

    <?php if ($news_query->have_posts()): ?>
      <ul class="section-news__list">
        <?php while ($news_query->have_posts()):
          $news_query->the_post(); ?>
          <li class="section-news__item">
            <a href="<?php the_permalink(); ?>">
              <!-- 正方形マーク -->
              <div class="section-news__mark"></div>

              <div class="section-news__content">
                <span class="section-news__date"><?php echo get_the_date('Y.m.d'); ?></span>
                <p class="section-news__text">
                  <?php
                  // 本文をプレーンテキストで取得
                  $content = wp_strip_all_tags(get_the_content());
                  // 40文字で切り捨てて、後ろに「...」を付与
                  echo wp_html_excerpt($content, 40, '...');
                  ?>
                </p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <p>現在お知らせはありません。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</section>
<!-- /お知らせ -->