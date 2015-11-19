<?php

//Creates a custom product

namespace CustomRayGuns;
die('balls');
function createCustomProduct(){
     $post = array(
     'post_author' => $user_id,
     'post_content' => '',
     'post_status' => "publish",
     'post_title' => '50/50 Raffle Ticket',
     'post_parent' => '',
     'post_type' => "product",

     );
      //Create post
     $post_id = wp_insert_post( $post, $wp_error );
/*     if($post_id){
     $attach_id = get_post_meta($product->parent_id, "_thumbnail_id", true);
     add_post_meta($post_id, '_thumbnail_id', $attach_id);
    }
    wp_set_object_terms( $post_id, 'Races', 'product_cat' );
     wp_set_object_terms($post_id, 'simple', 'product_type');

*/
     update_post_meta( $post_id, '_visibility', 'visible' );
     update_post_meta( $post_id, '_stock_status', 'instock');
     update_post_meta( $post_id, 'total_sales', '0');
     update_post_meta( $post_id, '_downloadable', 'yes');
     update_post_meta( $post_id, '_virtual', 'yes');
     update_post_meta( $post_id, '_regular_price', "666" );
     update_post_meta( $post_id, '_sale_price', "1" );

}
