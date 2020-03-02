<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<?php include ('component/meta.html'); ?>
<link rel="stylesheet" href="../src/dist/css/style.css" type="text/css" media="all">
</head>

<body>
<div class="Wrapper">

<?php include ('component/header.html'); ?>

<section class="Content">
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
          <h4><img src="../src/asset/image/top/logo_office-a.png" alt="オフィスでトドケール" width=308 height="160"/></h4>
          <div class="textWrapper">
            <p class="title">配達物管理システム</p>
            <p class="text">オフィス郵便物の受け渡しをもっと便利に！<br/>郵便物の受け渡しを見える化・効率化します。</p>
          </div>
          <a href="./product_office.php" class="button">サービス詳細<i class="icon-arrow"></i></a>
          <a href="#" class="Icon Icon--buttonIos">App Storeからダウンロード</a>
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
            <h4><img src="../src/asset/image/top/logo_personal-a.png" alt="じぶんでトドケール" width=308 height="160" /></h4>
            <div class="textWrapper">
              <p class="title">荷物受け渡しアプリ</p>
              <p class="text">私が受け取るモノはどこに？<br />個人間でのモノを受け渡しをもっと便利にします。</p>
            </div>
            <a href="./product_personal.php" class="button">サービス詳細<i class="icon-arrow"></i></a>
            <a href="#" class="Icon Icon--buttonIos">App Storeからダウンロード</a>
          </div>
        </div>
      </div>
    </div><!--/.Top__product-->

  </div><!--/.Product-->
</section><!--/.Content-->

<ul class="BreadCrumb">
  <li><a href="/">HOME</a></li>
  <li><a href="#">ページ名</a></li>
</ul>

<?php include ('component/footer.html'); ?>

</div><!--/.Wrapper-->

</body>
</html>
