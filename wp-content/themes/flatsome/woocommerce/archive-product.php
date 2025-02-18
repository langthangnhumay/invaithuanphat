<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see              https://docs.woocommerce.com/document/template-structure/
 * @package          WooCommerce/Templates
 * @version          3.4.0
 * @flatsome-version 3.16.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

// Add Custom Shop Content if set
if(is_shop()){
// page san-pham
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
$current_url2=str_replace("https://invaithuanphat.vn/", "", $current_url);
$taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 echo '<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">';
 foreach ($all_categories as $cat) {
     //$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
     //$image = wp_get_attachment_url( $thumbnail_id );
     //$img_srcset = wp_get_attachment_image_srcset( $thumbnail_id, 'medium' );
    $id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
    $src = wp_get_attachment_image_src( $id, 'full' );
    $srcset = wp_get_attachment_image_srcset( $id, 'full' );
    $sizes = wp_get_attachment_image_sizes( $id, 'full' );
    $alt = get_post_meta( $id, '_wp_attachment_image_alt', true);

     if($src){
?>
   <div class="product-small col has-hover product type-product post-1242 status-publish first instock product_cat-mau-in-ao-dai has-post-thumbnail shipping-taxable product-type-simple">
      <div class="col-inner">
         <div class="badge-container absolute left top z-1"></div>
         <div class="product-small box ">
            <div class="box-image page_san_pham">
               <div class="image-zoom"> <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" aria-label="<?php echo $cat->name; ?>"> 
                <img src="<?php echo esc_attr( $src );?>"
                     srcset="<?php echo esc_attr( $srcset ); ?>"
                     sizes="<?php echo esc_attr( $sizes );?>"
                     alt="<?php echo esc_attr( $alt );?>" />
                </a>
               </div>
               <div class="image-tools is-small top right show-on-hover"></div>
               <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
               <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
            </div>
            <div class="box-text box-text-products text-center grid-style-2">
               <div class="title-wrapper">
                  <p class="name product-title woocommerce-loop-product__title"><a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><?php echo $cat->name; ?></a></p>
               </div>
               <div class="price-wrapper"></div>
            </div>
         </div>
      </div>
   </div>
<?php
}
}		
}else{
if(is_shop() && flatsome_option('html_shop_page_content') && ! $wp_query->is_search() && $wp_query->query_vars['paged'] < 1 ){
   	echo do_shortcode('<div class="shop-page-content">'.flatsome_option('html_shop_page_content').'</div>');
} else {
	wc_get_template_part( 'layouts/category', flatsome_option( 'category_sidebar' ) );
}
}
//get list category					  
								
get_footer( 'shop' );
