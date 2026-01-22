<?php
$slug = get_post_field('post_name', get_post());
get_template_part("template-parts/pages/{$slug}");
