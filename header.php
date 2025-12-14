<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SnapGrow</title>
  <meta
    name="description"
    content="スマホだけで“写真が上手くなる人”を増やすための月額1,980円サービス" />
  <meta name="keywords" content="キーワード" />
  <!-- ファビコン -->
  <link rel="icon" type="image/x-icon" href="<?php assets_path(); ?>/images/common/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php assets_path(); ?>/images/common/apple-touch-icon.png" sizes="256x256" />
  <link rel="icon" type="image/png" href="<?php assets_path(); ?>/images/common/android-touch-icon.png" sizes="256x256">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <header class="p-header l-header">
      <div class="p-header__inner">
        <h1 class="p-header__logo">
          <a href="/">SnapGrow</a>
        </h1>
        <nav class="p-header__nav">
          <ul class="p-header__nav-list">
            <li class="p-header__nav-item">
              <a href="#service">サービス内容</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#strengths">選ばれる理由</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#plan">料金プラン</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#qa">よくある質問</a>
            </li>
            <li class="p-header__nav-item">
              <a href="#cta">お問い合わせ</a>
            </li>
          </ul>
        </nav>
        <button class="p-header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="p-header__drawer js-drawer">
          <nav class="p-header__drawer-nav">
            <ul class="p-header__drawer-list">
              <li class="p-header__drawer-item">
                <a href="#service">サービス内容</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#strengths">選ばれる理由</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#plan">料金プラン</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#qa">よくある質問</a>
              </li>
              <li class="p-header__drawer-item">
                <a href="#cta">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>