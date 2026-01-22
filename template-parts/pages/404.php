<?php

/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); // ヘッダーを読み込む
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <?php
    get_template_part('template-parts/block/block-page-ttl');
    ?>

    <?php
    get_template_part('template-parts/section/section-contact')
    ?> </main>
</div>

<?php
get_footer(); // フッターを読み込む
?>