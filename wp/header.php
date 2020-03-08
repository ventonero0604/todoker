<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<?php wp_head(); ?>
</head>
<body>
<div class="Wrapper">
<section class="Header">
  <div class="Header__logoWrapper">
    <h1><a href="<?php echo home_url('/'); ?>" class="Header__logo Icon">トドケール</a></h1>
    <p class="Header__logoText">
      <b class="Util-displayHiddenVisually">モノの受け渡しを、見える化・効率化。</b>
    </p>
  </div>

  <div class="Header__menuWrapper">
    <a href="#" class="Icon Icon--menu js-smpMenu">メニュー</a>
    <ul class="Header__menu">
      <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
      <li><a href="<?php echo home_url('/product'); ?>">プロダクト</a><i class="Icon Icon--arrow"></i>
        <ul>
          <li><a href="<?php echo home_url('/product_office'); ?>">オフィスでトドケール</a></li>
          <li><a href="<?php echo home_url('/product_personal'); ?>">自分でトドケール</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url('/stories'); ?>">ケーススタディー</a></li>
      <li><a href="<?php echo home_url('/faq'); ?>">サポート</a><i class="Icon Icon--arrow"></i>
        <ul>
          <li><a href="<?php echo home_url('/faq'); ?>">よくある質問</a></li>
          <li><a href="#">オンラインマニュアル</a></li>
          <li><a href="#">サポート問い合わせ</a></li>
        </ul>
      </li>
      <li><a href="#">ブログ</a></li>
      <li><a href="<?php echo home_url('/company'); ?>">会社概要</a></li>
    </ul>
  </div>
</section>

<section class="Content">

