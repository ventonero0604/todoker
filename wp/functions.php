<?php

/**
 * CSSとJavaScriptの読み込み
 *
 */
function my_script_init() {
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/src/dist/css/style.css', array(), '1.0.1', 'all' );
  wp_enqueue_script( 'script-app', get_template_directory_uri() . '/src/dist/js/app.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

    function media_uploader_enqueue() {
    	wp_enqueue_media();
    	wp_register_script('media-uploader', plugins_url('media-uploader.js' , __FILE__ ), array('jquery'));
    	wp_enqueue_script('media-uploader');
    }
    add_action('admin_enqueue_scripts', 'media_uploader_enqueue');


function the_pagination() {
  global $the_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}

?>