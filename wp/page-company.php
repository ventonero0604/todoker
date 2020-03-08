<?php
/*
Template Name: company
*/
?>

<?php
get_header();
?>

  <div class="Company">
    <div class="Company__mainWrapper">
      <div class="Company__main">
        <h2>トドケール</h2>
        <h3>株式会社トドケール</h3>
      </div>
    </div>

    <div class="Company__wrapper">
      <h3 class="Company__title"><b>会社概要</b></h3>
      <p>トドケールは機械学習やOCRを用いて、社内のプロセスを自動化するしたり、Business　Intelligenceツールを用いて社内データを可視化するデジタルコンサルティングから始まった会社です。</p>          
      <p>２０１９年にリリースし郵便物管理システム「じぶんでトドケール」と「オフィスでトドケール」の２つのアプリを開発し、郵便物管理・配達物管理の自動化に挑戦します。</p>          
      <p>「ウケワタシ」の不便を解消することがトドケールのミッションです。</p>          
    </div>

    <div class="Company__wrapper Company__wrapper--info">
      <h3 class="Company__title"><b>会社情報</b></h3>
      <table class="Company__info">
        <tbody>
          <tr>
            <th>会社名</th>
            <td>株式会社トドケール</td>
          </tr>
          <tr>
            <th>代表取締役CEO</th>
            <td>野島 剛</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>東京都千代田区九段南１－５－６りそな九段ビル５階</td>
          </tr>
          <tr>
            <th>設立年月日</th>
            <td>２０１８年７月２４日</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>情報通信業/運送業</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="Company__wrapper Company__wrapper--access">
      <h3 class="Company__title"><b>アクセス</b></h3>
      <p>東京メトロ九段下駅6番出口から徒歩1分ほどです。</p>          
      <div class="Company__mapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.26400158097!2d139.74956321584065!3d35.69512048019125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c6b480a32bf%3A0x1f9147dfcecd7dd5!2z44CSMTAyLTAwNzQg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Lmd5q615Y2X77yR5LiB55uu77yV4oiS77yWIOOCiuOBneOBquS5neauteODk-ODqyDvvJXpmo4!5e0!3m2!1sja!2sjp!4v1583494823933!5m2!1sja!2sjp" width="100%" height="518" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
	</div><!--/company-->

  <?php get_template_part('modules/contact_form'); ?>

  <ul class="BreadCrumb">
    <li><a href="<?php echo home_url(); ?>">HOME</a></li>
    <li><a href="javascript:void(0);" style="cursor:default;">会社概要</a></li>
  </ul>

</section><!--/content-->

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>

