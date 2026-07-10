<!-- 画像付きお知らせ -->
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
      <ul class="section-news__list thumb-list">
        <?php while ($news_query->have_posts()):
          $news_query->the_post(); ?>
          <li class="section-news__item thumb-item">
            <a href="<?php the_permalink(); ?>">

              <div class="section-news__thumb-wrap">
                <div class="section-news__thumb-bg"></div>
                <div class="section-news__thumb-img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); // 中サイズで取得
                          ?>
                  <?php else: ?>
                    <img src="<?php echo get_theme_file_uri('/images/no-image.jpg'); ?>" alt="No Image">
                  <?php endif; ?>
                </div>
              </div>

              <div class="section-news__content">
                <span class="section-news__date"><?php echo get_the_date('Y.m.d'); ?></span>
                <p class="section-news__txt">
                  <?php
                  $content = wp_strip_all_tags(get_the_content());
                  echo wp_html_excerpt($content, 80, '...'); // 画像付きなので文字数を少し多め（80文字）に調整
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
<!-- /画像付きお知らせ -->