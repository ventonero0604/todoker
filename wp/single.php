<?php
/*
Template Name: story
*/
?>

<?php
get_header();
?>

  <div class="Story">
    <div class="Story__main">
      <div class="image" style="background-image: url('<?php the_field("mainImage", $post_id); ?>")></div>
      <div class="textWrapper">
        <p class="number">TODOKER STORY <?php the_field("number", $post_id); ?></p>
        <h2 class="title"><?php the_field("title", $post_id); ?></h2>
        <h3 class="text"><?php the_field("subTitle", $post_id); ?></p>
      </div>
    </div>
    <div class="Story__info">
      <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/stories/logo_office.png" width="319" height="71" alt="オフィスでトドケールの導入で" />
      <p class="text"><?php the_field("solution", $post_id); ?></p>
    </div>
    <div class="Story__line"></div>

    <div class="Story__leadText"><?php the_field("client", $post_id); ?></div>

    <?php if(have_posts()): the_post(); ?>
    <!--本文取得-->
    <?php the_content(); ?>
    <?php endif; ?>

    <div class="Story__banner">
      <div class="is-pc">
        <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/stories/banner.png" width="1024" height="212"/>
      </div>
      <div class="is-smp">
        <img src="<?php echo get_template_directory_uri(); ?>/src/asset/image/stories/banner_smp.png" width="1024" height="212"/>
      </div>
    </div>

    <div class="Story__inquiry">
      <a href="#" class="button">お問合せ/資料請求<i class="icon-arrow"></i></a>
    </div>


    <?php if(have_posts()): the_post(); ?>
    <!--本文取得-->
    <?php the_content(); ?>
    <?php endif; ?>

    <div class="Story__listWrapper">
      <p class="Story__listTitle Icon Icon--titleCaseStudy">CASE STUDY</p>
      <div class="Story__list">

      <?php
      $args = array(
      'posts_per_page' => 6
      );
      $the_query = new WP_Query( $args ); 
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();?>

        <div class="Story__listItem">
          <a href="<?php the_permalink(); ?>">
            <div>
              <div class="image" style="background-image: url('<?php the_field("mainImage");?>')"></div>
              <p class="title"><?php the_title(); ?></p>
            </div>
          </a>
        </div>
        <?php endwhile;?>
      <?php endif;?>
      <?php wp_reset_query(); ?>
      </div>
    </div>

    <div class="Story__toStories">
      <a href="<?php echo home_url('/stories'); ?>" class="button">ケーススタディ一覧<i class="icon-arrow"></i></a>
    </div>

  </div><!--/.Story-->
</section><!--/.Content-->

<ul class="BreadCrumb">
  <li><a href="<?php echo home_url(); ?>">HOME</a></li>
  <li><a href="<?php echo home_url('/stories'); ?>">ケーススタディ</a></li>
  <li><a href="javascript:void(0);" style="cursor:default;"><?php the_title(); ?></a></li>
</ul>

<?php
get_footer();
?>

</div><!--/wrapper-->
</body>
</html>
