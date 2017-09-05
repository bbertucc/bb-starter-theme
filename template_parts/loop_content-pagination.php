<div class="loop_content-pagination">
  
  <?php
  //Page Navigation 
  echo paginate_links( array(
  	'base' => str_replace( 99999900000, '%#%', esc_url( get_pagenum_link( 99999900000 ) ) ),
  	'format' => '?paged=%#%',
  	'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
  ) );
  ?>
  
</div>
