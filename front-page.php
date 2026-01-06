<?php get_header(); ?>

<div class="c-button">テスト</div>

<main>
  <?php get_template_part('template-parts/section', 'hero'); ?>
  <?php get_template_part('template-parts/section', 'worry'); ?>
  <?php get_template_part('template-parts/section', 'strengths'); ?>
  <?php get_template_part('template-parts/section', 'voice'); ?>
  <?php get_template_part('template-parts/section', 'flow'); ?>
  <?php get_template_part('template-parts/section', 'works'); ?>
  <?php get_template_part('template-parts/section', 'plan'); ?>
  <?php get_template_part('template-parts/section', 'cta'); ?>
  <?php get_template_part('template-parts/section', 'company'); ?>
</main>

<?php get_footer(); ?>