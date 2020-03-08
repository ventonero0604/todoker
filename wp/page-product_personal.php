<?php
/*
Template Name: product_personal
*/
?>

<?php
get_header();
?>

  <div class="Product Product--personal">
    <div class="Product__mainWrapper">
      <div class="Product__main">
        <div class="image"></div>
        <div class="textWrapper">
          <p class="title">荷物受け渡しアプリ</p>
          <h2 class="logo">じぶんでトドケール</h2>
          <h3 class="lead">私が受け取るモノはどこに？<br/>個人間でのモノの受け渡しをもっと便利に。</h3>
          <a href="#" class="button">お問い合わせしてみる！<i class="icon-arrow"></i></a>
        </div>
      </div>
      <div class="line"></div>
    </div>

    <div class="Product__infoWrapper">
      <div class="Product__info">
        <div class="Product__story">
          <div class="Product__storyTitle">FOR PERSONAL</div>
          <div class="Product__storyList">
            <div class="Product__storyItem Product__storyItem--1">
              <div class="textWrapper">
                <p>総務・メール室の<br/>業務改善に貢献。</p>
                <a href="<?php echo home_url('/stories'); ?>#">もっと詳しく<i class="icon-arrow"></i></a>
              </div>
              <div class="image"></div>
            </div>
            <div class="Product__storyItem Product__storyItem--2">
              <div class="textWrapper">
                <p>シェアオフィス<br/>での活用方法</p>
                <a href="<?php echo home_url('/stories'); ?>">もっと詳しく<i class="icon-arrow"></i></a>
              </div>
              <div class="image"></div>
            </div>
          </div>
        </div>
        <div class="Product__infoText">
          <p>あなたが受けとならないといけない荷物はどれくらいある？</p>
          <p>トドケールはあなたの荷物をアプリで管理。</p>
          <p>「あれ、受け取ってくれた？」「あれは、どこにおいてくれたの？」</p>
          <p>こんな会話はもうなくなるかも。</p>
          <p>トドケールは受け渡しの不便さから、ユーザーを自由にします。</p>
        </div>
      </div>
    </div>

    <div class="Product__localNavWrapper">
    </div>

    <div class="Product__feature Product__feature--personal1">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">荷物を受け取る</b>
      </h4>
      <p class="Product__featureLead">自分あての荷物をアプリで管理。荷物を受け取るための機能が充実。</p>
      <p class="Product__featureSubtext">機能の説明分。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。この文章はダミーです。</p>
      <div class="Product__featureStep">
        <div class="step step1">
          <div class="textWrapper">
            <p class="number">1.</p>
            <p class="title">荷物の通知</p>
            <p class="text">専用アプリまたはメールで、荷物の通知が届きます。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/receipt_1.png" height="328"/>
          </div>
        </div>
        <div class="step step2">
          <div class="textWrapper">
            <p class="number">2.</p>
            <p class="title">荷物の詳細</p>
            <p class="text">荷物の種類、受け渡し場所が記載されています。ダイアル式ロッカーは、メッセージ欄で番号確認。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/receipt_2.png" height="328"/>
          </div>
        </div>
        <div class="step step3">
          <div class="textWrapper">
            <p class="number">3.</p>
            <p class="title">受け取り</p>
            <p class="text">指定された場所に荷物を取りに行く。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/receipt_3.png" height="160"/>
          </div>
        </div>
        <div class="step step4">
          <div class="textWrapper">
            <p class="number">4.</p>
            <p class="title">受け取り報告</p>
            <p class="text">「荷物の受取を報告する」ボタン押下で相手に受取完了通知を発信できます。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/receipt_4.png" height="328"/>
          </div>
        </div>
        <div class="step step5">
          <div class="textWrapper">
            <p class="number">5.</p>
            <p class="title">一覧管理</p>
            <p class="text">あなたが受け取るべき荷物はアプリで一覧管理できます。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/receipt_1.png" height="328"/>
          </div>
        </div>
      </div>
    </div>

    <div class="Product__feature Product__feature--personal2">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">荷物を渡す</b>
      </h4>
      <p class="Product__featureLead">最短5秒で荷物登録。使いやすさと業務の効率化を意識したアプリ設計。</p>
      <p class="Product__featureSubtext">受取人と受取場所を登録し、荷物の写真を撮影、送るボタン押下で受取人に自動通知が届きます。</p>
      <div class="Product__featureStep">
        <div class="step step1">
          <div class="textWrapper">
            <p class="number">1.</p>
            <p class="title">荷物の登録
            </p>
            <p class="text">受取人、受取場所を指定。メッセージを利用することで、開錠番号の共有も可能。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/give_1.png" height="328"/>
          </div>
        </div>
        <div class="step step2">
          <div class="textWrapper">
            <p class="number">2.</p>
            <p class="title">写真を登録</p>
            <p class="text">必要に応じて、荷物の写真を撮影することができます。<small>※アルバムからの登録も可能</small></p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/give_2.png" height="328"/>
          </div>
        </div>
        <div class="step step3">
          <div class="textWrapper">
            <p class="number">3.</p>
            <p class="title">送信</p>
            <p class="text">受取人に送信することで、アプリまたはメールで自動通知します。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/give_3.png" height="328"/>
          </div>
        </div>
        <div class="step step4">
          <div class="textWrapper">
            <p class="number">4.</p>
            <p class="title">ステータス管理</p>
            <p class="text">荷受者の受取状況に応じてステータス管理。受取報告が来ると「受け取り済み」の表示になります。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/give_4.png" height="328"/>
          </div>
        </div>
        <div class="step step5">
          <div class="textWrapper">
            <p class="number">5.</p>
            <p class="title">一覧管理</p>
            <p class="text">あなたが送った荷物はアプリで一覧管理できます。</p>
          </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/give_5.png" height="328"/>
          </div>
        </div>
      </div>
    </div>

    <?php get_template_part('modules/product_info'); ?>
    <?php get_template_part('modules/inquiry'); ?>

  </div><!--/.Product-->
</section><!--/.Content-->

<ul class="BreadCrumb">
  <li><a href="<?php echo home_url(); ?>">HOME</a></li>
  <li><a href="<?php echo home_url('/product'); ?>">プロダクト</a></li>
  <li><a href="javascript:void(0);" style="cursor:default;">じぶんでトドケール</a></li>
</ul>

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>

