<?php
/*
Template Name: stories
*/
?>

<?php
get_header();
?>

  <div class="Stories">
    <div class="Stories__mainWrapper">
      <div class="Stories__main">
        <h2>トドケール</h2>
        <h3 class="Icon Icon--titleCaseStudy">CASE STUDY</h3>
      </div>
    </div>

    <div class="Stories__wrapper">
      <h4 class="Stories__titleText">トドケールの導入で働き方が変わる。</h4>
      <div class="Stories__itemList">

        <?php
        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
        $args = array(
          'posts_per_page' => 5,
	        'category_name' => 'story', //"gallery"というカテゴリーに属する記事だけを取得
	        'paged' => $paged, //現在のページに該当する記事から取得
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();?>

          <div class="Stories__item">
            <div class="image" style="background-image: url('<?php the_field("mainImage");?>')"></div>
            <div class="textWrapper">
              <div class="textContainer">
                <p class="title"><span class="Icon Icon--story"></span><?php the_title(); ?></p>
                <p class="text"><?php echo get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="textlink">ストーリーを確認<i class="icon-arrow"></i></a>
              </div>
            </div>
          </div>
          <?php endwhile;?>
          <?php endif;?>
          <?php wp_reset_query(); ?>
      </div>

      <div class="Stories__pagerWrapper">
        <div class="Stories__pager">

        <?php
        $big = 999999999; // need an unlikely integer
          echo paginate_links( array(
          	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          	'format' => '?paged=%#%',
          	'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages,
            'prev_text'          => __('＜'),
          	'next_text'          => __('＞'),
          ) );
        ?>
        <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>

  <?php get_template_part('modules/product_info'); ?>
  <?php get_template_part('modules/inquiry'); ?>

  </div><!--/.Stories-->
</section><!--/.Content-->

  <ul class="BreadCrumb">
    <li><a href="<?php echo home_url(); ?>">HOME</a></li>
    <li><a href="javascript:void(0);" style="cursor:default;">ケーススタディ</a></li>
  </ul>

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>