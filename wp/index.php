
<?php get_header(); ?>
  <div class="Top">
    <div class="Top__mainWrapper">
    <div class="Top__main">
      <div class="Top__mainContents">
        <div class="Top__mainTextWrapper">
          <h2>トドケール</h2>
          <h3><span></span></h3>
          <p class="Top__mainText">オフィスの郵便物の受け渡しをもっと便利に！郵便物の受け渡しを見える化・効率化します。</p>
          <a href="#" class="button">お問い合わせしてみる！<i class="icon-arrow"></i></a>
        </div>
        <div class="Top__mainMovieWrapper">
          <div class="Top__mainMovie">
            <iframe width="685" height="456" src="https://www.youtube.com/embed/5ZxeaGKs8YA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    </div><!--/.Top__main-->
  </div>  

  <div class="Top__reason">
    <h3 class="Top__reasonTitle">トドケールが選ばれる理由</h3>
    <div class="Top__reasonListWrapper">
      <dl class="Top__reasonList">
        <dt>
          <div class="image"><span class="Icon Icon--reason1"></span></div>
          郵便物を一元管理
        </dt>
        <dd>オフィス内の全ての郵便物・<br/>配達物を一元管理、各荷物の<br/>ステータスも確認可能</dd>
      </dl>
      <dl class="Top__reasonList">
        <dt>
          <div class="image"><span class="Icon Icon--reason2"></span></div>
          5秒で荷物登録
        </dt>
        <dd>アプリで荷物を登録・<br/>後から写真だけ連続で<br/>登録することも可能</dd>
      </dl>
      <dl class="Top__reasonList">
        <dt>
          <div class="image"><span class="Icon Icon--reason3"></span></div>
          荷受人に自動通知
        </dt>
        <dd>荷受人にメールかアプリ<br/>で自動通知。受け渡しに<br/>かかる時間を削減</dd>
      </dl>
      <dl class="Top__reasonList">
        <dt>
          <div class="image"><span class="Icon Icon--reason4"></span></div>
          業務を可視化
        </dt>
        <dd>オペレーションを改善する<br/>ためのデータも自動的に蓄積。<br/>人材配置や効率化の指標に<br/>使える。</dd>
      </dl>
    </div>

    <div class="Top__reasonContentsWrapper">
      <div class="Top__reasonContentsContainer">
        <ul class="Top__reasonContentsMenu">
          <li class="is-current"><a href="#" class="js-outerSliderMenu">郵便物を一元管理</a></li>
          <li><a href="#" class="js-outerSliderMenu">5秒で荷物登録</a></li>
          <li><a href="#" class="js-outerSliderMenu">荷受人に自動通知</a></li>
          <li><a href="#" class="js-outerSliderMenu">業務を可視化</a></li>
        </ul>
        <div data-slick='{"dots": true, "arrows":false}' class="slider">
          <div>
            <div class="Top__reasonContents">
              <dl>
                <dt class="title">郵便物を一元管理</dt>
                <dd class="text">オペレーションを改善するためのデータも自動的に蓄積。人材配置や効率化の指標に使える</dd>
                <dd><a href="<?php echo home_url('/product'); ?>" class="button">機能を確認<i class="icon-arrow"></i></a></dd>
              </dl>
              <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/contents1.png" alt="" />
            </div>
          </div>
          <div>
            <div class="Top__reasonContents">
              <dl>
                <dt class="title">5秒で荷物登録</dt>
                <dd class="text">オペレーションを改善するためのデータも自動的に蓄積。人材配置や効率化の指標に使える</dd>
                <dd><a href="<?php echo home_url('/product_office'); ?>" class="button">機能を確認<i class="icon-arrow"></i></a></dd>
              </dl>
              <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/contents1.png" alt="" />
            </div>
          </div>
          <div>
            <div class="Top__reasonContents">
              <dl>
                <dt class="title">荷受人に自動通知</dt>
                <dd class="text">オペレーションを改善するためのデータも自動的に蓄積。人材配置や効率化の指標に使える</dd>
                <dd><a href="<?php echo home_url('/product_office'); ?>" class="button">機能を確認<i class="icon-arrow"></i></a></dd>
              </dl>
              <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/contents1.png" alt="" />
            </div>
          </div>
          <div>
            <div class="Top__reasonContents">
              <dl>
                <dt class="title">業務を可視化</dt>
                <dd class="text">オペレーションを改善するためのデータも自動的に蓄積。人材配置や効率化の指標に使える</dd>
                <dd><a href="<?php echo home_url('/product_office'); ?>" class="button">機能を確認<i class="icon-arrow"></i></a></dd>
              </dl>
              <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/top/contents1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--/.Top__reason-->

  <div class="Top__productWrapper">
    <h3 class="Top__productTitle"><span class="Icon Icon--titleProduct">PRODUCT</span></h3>
    <div class="Top__product Top__product--office">
      <div class="Top__productImages">
        <div class="image1"></div>
        <div class="image2"><span></span></div>
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
  <div class="Top__productWrapperBg">
    <div class="Top__productWrapper">
      <div class="Top__product Top__product--personal">
        <div class="Top__productImages">
          <div class="image1"></div>
          <div class="image2"><span></span></div>
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

  <div class="Top__caseStudyWrapper">
    <h3 class="Top__caseStudyTitle"><span class="Icon Icon--titleCaseStudy">CASE STUDY</span></h3>
    <p class="Top__caseStudyTitleText">トドケールの導入で働き方はどう変わるのでしょうか？</p>
    <div class="Top__caseStudyItemList">

      <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array(
          'posts_per_page' => 6,
	        'category_name' => 'story', //"gallery"というカテゴリーに属する記事だけを取得
	        'paged' => $paged, //現在のページに該当する記事から取得
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();?>

      <div class="Top__caseStudyItem">
        <div class="image" style="background-image: url('<?php the_field("mainImage");?>')"></div>
        <div class="textWrapper">
          <p class="title"><span class="Icon Icon--story"></span><?php the_title(); ?></p>
          <p class="text"><?php echo get_the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="textlink">ストーリーを確認</a>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif;?>
      <?php wp_reset_query(); ?>
    </div>
    <a href="#" class="button">プロダクト<i class="icon-arrow"></i></a>
  </div><!--/.Top__caseStudy-->

  <div class="Top__newsWrapper">
    <h3 class="Top__newsTitle"><span class="Icon Icon--titleNews">NEWS</span></h3>
    <div class="Top__news">
      <ul class="Top__newsItemWrapper">
        <li class="Top__newsItem">
          <span class="Top__newsItem--date">2020.01.01</span>
          <span class="Top__newsItem--text">このテキストはダミーです</span>
        </li>
        <li class="Top__newsItem">
          <span class="Top__newsItem--date">2020.01.31</span>
          <span class="Top__newsItem--text">このテキストはダミーですこのテキストはダミーです</span>
        </li>
        <li class="Top__newsItem">
          <span class="Top__newsItem--date">2020.12.12</span>
          <span class="Top__newsItem--text"><b class="is-new">NEW</b>このテキスト</span>
        </li>
      </ul>
    </div>
  </div><!--/.Top__news-->

  <div class="Top__missionWrapper">
    <div class="Top__mission">
      <div class="logoWrapper">
        <p class="logo">トドケール</p>
        <p class="Icon Icon--titleMission">MISSION</p>
      </div>
      <div class="textWrapper">
        <p class="text">トドケールは 世の中のモノの受け渡しを<br/>もっとスムーズ・便利に することを目指します。</p>
        <p class="text">あなたのモノはいつ、 どこに届いて どこにあるの？</p>
        <p class="text">インターネットの時代、<br/>オンラインで買い物ができて、 会話ができるけど、<br/>それを受け渡す方法の進化は 追いついてきませんでした。</p>
        <p class="text">人と人とが時間と場所を 合わせて受け取っていた<br/>「ウケワタシ」の煩わしさを トドケールは解決します。</p>
      </div>
    </div>
  </div><!--/.Top_mission-->

</section><!--/.Content-->

<?php get_footer(); ?>
</div><!--/.Wrapper-->

</html>
