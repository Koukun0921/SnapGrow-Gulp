<?php get_header(); ?>

<main>
  <div class="p-404">
    <div class="p-404__inner l-inner">
      <h2 class="p-404__title">お探しのページは<br class="u-sp">見つかりませんでした。</h2>
      <div class="p-404__btn">
        <a class="c-button" href="<?php echo esc_url(home_url('/')); ?>">トップページへ</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>