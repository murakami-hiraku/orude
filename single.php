<?php get_header(); ?>
<main class="single">

  <div class="single__inner inner">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article <?php post_class('p-entry'); ?>>
          <header class="p-entry__header">
            <div class="p-entry__meta">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date(); ?>
              </time>
              <span class="p-entry__category">
                <?php the_category(', '); ?>
              </span>
            </div>
            <h1 class="p-entry__title"><?php the_title(); ?></h1>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <div class="p-entry__thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>

          <div class="p-entry__content">
            <?php the_content(); ?>
          </div>

          <footer class="p-entry__footer">
            <?php if (has_tag()) : ?>
              <div class="p-entry__tags">
                <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?>
              </div>
            <?php endif; ?>
          </footer>
        </article>


        <!-- pagination -->
        <div class="page-links">
          <?php if (get_previous_post()): ?>
            <div class="page-link page-prev">
              <?php previous_post_link('%link', ''); ?>
            </div>
          <?php endif; ?>

          <div class="page-blog-home">
            <?php get_template_part('template-parts/parts/parts-btn', null, [
              'text'  => 'お知らせ一覧',
              'link'  => '/blog/',
              'class' => '' // 色を変えたい時などの識別用クラス
            ]); ?>
          </div>

          <?php if (get_next_post()): ?>
            <div class="page-link page-next">
              <?php next_post_link('%link', ''); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- /pagination -->



    <?php endwhile;
    endif; ?>

  </div>

  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->


</main>

<?php get_footer(); ?>