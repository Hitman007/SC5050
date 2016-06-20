<?php
//Creates a custom raffleproduct

namespace SC5050;

class RaffleProductCreator{
	
    public function createRaffleProduct($productName){
        global $CRG_productName;
        global $CRG_regularPrice;
        $post = array(
            //'post_author' => $user_id,
            'post_content' => '',
            'post_status' => "publish",
            'post_title' => $productName,
            'post_parent' => '',
            'post_type' => "product",
        );
        //Create post:
        $post_id = wp_insert_post( $post );
        update_post_meta( $post_id, '_visibility', 'visible' );
        update_post_meta( $post_id, '_stock_status', 'instock');
        update_post_meta( $post_id, 'total_sales', '0');
        update_post_meta( $post_id, '_downloadable', 'no');
        update_post_meta( $post_id, '_virtual', 'yes');
        update_post_meta( $post_id, '_regular_price', $CRG_regularPrice);
        update_post_meta( $post_id, '_sale_price', "123" );
        update_post_meta( $post_id, '_price', "321" );
    }
}