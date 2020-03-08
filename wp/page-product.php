<?php
/*
Template Name: product
*/
?>

<?php
get_header();
?>

<div class="ProductList">
    <div class="ProductList__mainWrapper">
      <div class="ProductList__main">
          <h2 class="logo">トドケール</h2>
          <h3 class="Icon Icon--titleProduct">PRODUCT</h3>
        </div>
      </div>
    </div>
    <p class="ProductList__lead">トドケールは、郵便物管理・配達物管理の自動化に挑戦します。</p>

    <div class="Top__productWrapper">
      <div class="Top__product Top__product--office">
        <div class="Top__productImages">
          <div class="image1"></div>
          <div class="image2"></div>
        </div>
        <div class="Top__productInfo">
          <h4><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/logo_office-a.png" alt="オフィスでトドケール" width=308 height="160"/></h4>
          <div class="textWrapper">
            <p class="title">配達物管理システム</p>
            <p class="text">オフィス郵便物の受け渡しをもっと便利に！<br/>郵便物の受け渡しを見える化・効率化します。</p>
          </div>
          <a href="<?php echo home_url('/product_office'); ?>" class="button">サービス詳細<i class="icon-arrow"></i></a>
          <a href="https://apps.apple.com/jp/app/%E3%82%AA%E3%83%95%E3%82%A3%E3%82%B9%E3%81%A7%E3%83%88%E3%83%89%E3%82%B1%E3%83%BC%E3%83%AB/id1481099573?mt=8" class="Icon Icon--buttonIos">App Storeからダウンロード</a>
        </div>
      </div>
    </div>
    <div class="Top__productWrapperBackGround">
      <div class="Top__productWrapper">
        <div class="Top__product Top__product--personal">
          <div class="Top__productImages">
            <div class="image1"></div>
            <div class="image2"></div>
          </div>
          <div class="Top__productInfo">
            <h4><img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/logo_personal-a.png" alt="じぶんでトドケール" width=308 height="160" /></h4>
            <div class="textWrapper">
              <p class="title">荷物受け渡しアプリ</p>
              <p class="text">私が受け取るモノはどこに？<br />個人間でのモノを受け渡しをもっと便利にします。</p>
            </div>
            <a href="<?php echo home_url('/product_personal'); ?>" class="button">サービス詳細<i class="icon-arrow"></i></a>
            <a href="https://apps.apple.com/jp/app/%E3%81%98%E3%81%B6%E3%82%93%E3%81%A7%E3%83%88%E3%83%89%E3%82%B1%E3%83%BC%E3%83%AB/id1484840067?mt=8" class="Icon Icon--buttonIos">App Storeからダウンロード</a>
          </div>
        </div>
      </div>
    </div><!--/.Top__product-->

  </div><!--/.Product-->

  <ul class="BreadCrumb">
    <li><a href="<?php echo home_url(); ?>">HOME</a></li>
    <li><a href="javascript:void(0);" style="cursor:default;">プロダクト</a></li>
  </ul>

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>