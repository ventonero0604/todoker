<?php
/*
Template Name: product_office
*/
?>

<?php
get_header();
?>

  <div class="Product Product--office">
    <div class="Product__mainWrapper">
      <div class="Product__main">
        <div class="image"></div>
        <div class="textWrapper">
          <p class="title">配達物管理システム</p>
          <h2 class="logo">オフィスでトドケール</h2>
          <h3 class="lead">オフィス郵便物の受け渡しをもっと便利に！<br/>郵便物の受け渡しを見える化・効率化。</h3>
          <a href="#" class="button">お問い合わせしてみる！<i class="icon-arrow"></i></a>
        </div>
      </div>
      <div class="line"></div>
    </div>

    <div class="Product__infoWrapper">
      <div class="Product__info">
        <div class="Product__story">
          <div class="Product__storyTitle">FOR OFFICE</div>
          <div class="Product__storyList">
            <div class="Product__storyItem Product__storyItem--1">
              <div class="textWrapper">
                <p>総務・メール室の<br/>業務改善に貢献。</p>
                <a href="<?php echo home_url('/stories'); ?>">もっと詳しく<i class="icon-arrow"></i></a>
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
          <p>オフィスに届く郵便物を<br/>いまだに紙やスプレッドシートで管理していませんか？</p>
          <p>書類が届いているはずなのにどこにあるのかわからない。</p>
          <p>届いているの？まだ届いていないの？どこにあるの？</p>
          <p>そんなオフィスの荷物の受け渡しにかかる時間を削減して、</p>
          <p>あなたのオフィスの荷物を見える化しませんか？</p>
        </div>
      </div>
    </div>

    <div class="Product__localNavWrapper js-localNavWrapper">
      <ul class="Product__localNav">
        <li class="is-current js-localNavItem"><a href="#office1" class="js-localNavLink">郵便物を一括管理</a></li>
        <li class="js-localNavItem"><a href="#office2" class="js-localNavLink">5秒で荷物登録</a></li>
        <li class="js-localNavItem"><a href="#office3" class="js-localNavLink">荷受人に自動通知</a></li>
        <li class="js-localNavItem"><a href="#office4" class="js-localNavLink">業務を可視化</a></li>
      </ul>
    </div>

    <div class="Product__feature Product__feature--office1" id="office1">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">郵便物を一元管理</b>
      </h4>
      <p class="Product__featureLead">オフィスの郵便物・配達物を一覧表示。各荷物のステータスも確認可能。</p>
      <div class="Product__featureItem">
        <div class="Product__featureItemText">
          <p class="lead">クラウドのダッシュボードで荷物を管理</p>
          <p class="text">オフィスに届く荷物の一元管理が可能で、登録した荷物の登録日や受取状態を確認することができ、全荷物の履歴が残るので”オフィスの荷物の見える化“に最適です。</p>
          <p class="lead">ステータス管理で渡し忘れを防止</p>
          <p class="text">登録した荷物の受取状況を「受取待ち」「受取済み」の2つのステータスで管理でき、荷物の滞在日数や受取人の連絡先も確認できるので、受渡しのトラブル防止に役立ちます。</p>
        </div>
        <div class="Product__featureItemImage">
          <div class="itemWrapper">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/dashboard_1.png" width="470" height="320"/></div>
            <div class="text">デスクトップ：ウェブアプリケーション</div>
          </div>
          <div class="itemWrapper">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/dashboard_2.png" width="148" height="319"/></div>
            <div class="text">アプリ</div>
          </div>
        </div>
      </div>
    </div>

    <div class="Product__feature Product__feature--office2" id="office2">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">アプリで荷物登録</b>
      </h4>
      <p class="Product__featureLead">最短5秒で荷物登録。使いやすさと業務の効率化を意識したアプリ設計</p>
      <p class="Product__featureSubtext">受取人と受取場所を登録し、荷物の写真を撮影、送るボタン押下で受取人に自動通知が届きます。</p>
      <div class="Product__featureItem">
        <div class="Product__featureItemList">
          <div class="item">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/app_flow_1.png" width="200" height="398"/></div>
            <p class="text">アプリトップ</p>
          </div>
          <div class="arrow"><span></span></div>
          <div class="item">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/app_flow_2.png" width="200" height="398"/></div>
            <p class="text">写真撮影</p>
          </div>
          <div class="arrow"><span></span></div>
          <div class="item">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/app_flow_3.png" width="200" height="398"/></div>
            <p class="text">情報登録</p>
          </div>
          <div class="arrow"><span></span></div>
          <div class="item">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/app_flow_4.png" width="200" height="398"/></div>
            <p class="text">ステータス管理</p>
          </div>
        </div>
      </div>
    </div>

    <div class="Product__feature Product__feature--office3" id="office3">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">荷受人に自動通知</b>
      </h4>
      <div class="Product__featureItem">
        <div class="Product__featureItemText">
          <p class="title">受け渡しに関わる工数を削減。</p>
          <p class="lead">荷受人へメールを送る、各部署を回って、荷物を届ける。そんな無駄な時間を節約。</p>
          <p class="text">配送物の通知メールを書く5分が自動通知機能で10秒に、荷物を届けるから、受取人が自ら取りに行くことで、受渡し工数の削減を実現しています。</p>
          <p class="disclaim">※「オフィスでトドケール」の通知を受け取るには「じぶんでトドケール」のインストールが必要です。</p>
        </div>
        <div class="Product__featureItemImage">
          <div class="itemWrapper">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/push_1.png" width="230" height="313" class="no-border"/></div>
            <div class="text">自動通知</div>
          </div>
          <div class="itemWrapper">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/push_2.png" width="329" height="329" class="no-border"/></div>
          </div>
        </div>
      </div>
    </div>

    <div class="Product__feature Product__feature--office4" id="office4">
      <h4 class="Product__featureTitle">
        <span class="image"></span>
        <b class="title">業務を可視化</b>
      </h4>
      <div class="Product__featureItem">
        <div class="Product__featureItemText">
          <p class="title">人材配置や効率化のターゲティングに有効な情報を提供。</p>
          <p class="lead">荷物を登録していくだけで、オペレーションを改善するためのデータが自動で蓄積。</p>
          <p class="text">総務の残業時間は減らないけど、業務は増えている。シェアオフィスでメールボックスを用意しているけどどれくらい使われているかわからない。蓄積データを活用することで、業務見えてきます。</p>
        </div>
        <div class="Product__featureItemImage">
          <div class="itemWrapper">
            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/product/data_1.png" width="580" height="373" class="no-border"/></div>
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
  <li><a href="javascript:void(0);" style="cursor:default;">オフィスでトドケール</a></li>
</ul>

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>

