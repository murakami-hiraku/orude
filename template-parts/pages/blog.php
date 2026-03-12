<?php
/*
Template Name: ブログ一覧
*/
?>

<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->


<main class="page-blog">

  <?php get_template_part('template-parts/block/block-page-ttl'); ?>

  <section class="page-blog__section section fadein">

    <div class="page-blog__wrap">
      <div class="page-blog__inner inner">

        <div class="page-blog__container">

          <?php
          get_template_part('template-parts/parts/parts-bg-flower--right');
          ?>


          <?php
          // ページネーション対応
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          // デバイスごとに表示件数を変更
          $is_mobile = wp_is_mobile();
          $posts_per_page = $is_mobile ? 12 : 24;

          // 投稿取得
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => $posts_per_page,
            'paged' => $paged
          );
          $blog_query = new WP_Query($args);
          ?>

          <div class="page-blog__contents">
            <?php if ($blog_query->have_posts()) : ?>

              <!-- ブログカード -->
              <div class="page-blog__cards">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                  <article class="page-blog__card">
                    <a href="<?php the_permalink(); ?>">
                      <div class="page-blog__card-img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/img/common/no-img.png" alt="no image">
                        <?php endif; ?>
                      </div>
                      <div class="page-blog__card-body">
                        <time class="page-blog__card-date">
                          <?php echo get_the_date('Y.m.d'); ?>
                        </time>
                        <h2 class="page-blog__card-ttl">
                          <?php
                          $limit = 31; // 制限文字数
                          $title = get_the_title(); // タイトルを取得

                          if (mb_strlen($title) > $limit) {
                            // ??文字を超える場合、??文字まで切り出して「...」を足す
                            echo esc_html(mb_substr($title, 0, $limit)) . '...';
                          } else {
                            // ??文字以内の場合はそのまま表示
                            echo esc_html($title);
                          }
                          ?>
                        </h2>
                        <!-- <div class="page-blog__card-txt">
                      <?php
                      $excerpt = get_the_excerpt();
                      $excerpt = mb_substr($excerpt, 0, 78); // 78文字まで取得
                      if (mb_strlen(get_the_excerpt()) > 80) {
                        $excerpt .= '…'; // 78文字を超える場合に「…」を追加
                      }
                      echo esc_html($excerpt);
                      ?>
                    </div> -->
                      </div>
                    </a>
                  </article>
                <?php endwhile; ?>
              </div>
              <!-- /ブログカード -->


              <!-- ページネーション -->
              <?php
              $max_pages = $blog_query->max_num_pages;
              $current = max(1, get_query_var('paged'));

              if ($max_pages > 1) :
              ?>
                <div class="page-blog__pagination">
                  <!-- 前へ -->
                  <?php if ($current > 1): ?>
                    <a href="<?php echo get_pagenum_link($current - 1); ?>" class="page-blog__pagination-nav page-blog__pagination-nav--prev"><span class="page-blog__pagination-icon page-blog__pagination-icon--prev"></span></a>
                  <?php else: ?>
                    <span class="page-blog__pagination-nav page-blog__pagination-nav--prev page-blog__pagination-nav--disabled"><span class="page-blog__pagination-icon page-blog__pagination-icon--prev page-blog__pagination-icon--disabled"></span></span>
                  <?php endif; ?>

                  <!-- ページ番号 -->
                  <div class="page-blog__pagination-squares">
                    <?php
                    // ページネーション表示数（スマホは6、PCは6）
                    $visible_count = $is_mobile ? 6 : 6;

                    if ($max_pages <= $visible_count) {
                      $start = 1;
                      $end = $max_pages;
                    } else {
                      $half = floor($visible_count / 2);
                      $start = max(1, $current - $half);
                      $end = $start + $visible_count - 1;
                      if ($end > $max_pages) {
                        $end = $max_pages;
                        $start = $end - $visible_count + 1;
                      }
                    }

                    for ($i = $start; $i <= $end; $i++) {
                      if ($i == $current) {
                        echo '<span class="page-blog__pagination-square page-blog__pagination-square--current"></span>';
                      } else {
                        echo '<a href="' . get_pagenum_link($i) . '" class="page-blog__pagination-square"></a>';
                      }
                    }
                    ?>
                  </div>

                  <!-- 次へ -->
                  <?php if ($current < $max_pages): ?>
                    <a href="<?php echo get_pagenum_link($current + 1); ?>" class="page-blog__pagination-nav page-blog__pagination-nav--next"><span class="page-blog__pagination-icon page-blog__pagination-icon--next"></span></a>
                  <?php else: ?>
                    <span class="page-blog__pagination-nav page-blog__pagination-nav--next page-blog__pagination-nav--disabled"><span class="page-blog__pagination-icon page-blog__pagination-icon--next page-blog__pagination-icon--disabled"></span></span>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
          </div>

        <?php else : ?>
          <p>記事がありません。</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/section/section-contact'); ?>



<?php get_footer(); ?>