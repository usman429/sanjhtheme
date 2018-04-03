<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) exit( 'Direct script access denied.' );

define( 'WOOHOO_THEME_NAME', 'Woohoo'   );
define( 'WOOHOO_THEME_FOLDER', 'woohoo' );
define( 'WOOHOO_THEME_VER', '2.0.4'     );
define( 'WOOHOO_TEMPLATE_PATH',         get_template_directory() );
define( 'WOOHOO_TEMPLATE_URL',          get_template_directory_uri() );
define( 'WOOHOO_WOOCOMMERCE_IS_ACTIVE', class_exists( 'WooCommerce' ) );
define( 'WOOHOO_BWPMINIFY_IS_ACTIVE',   class_exists( 'BWP_MINIFY'  ) );




require_once ( get_template_directory() . '/framework/admin/framework-options.php'          );
require_once ( get_template_directory() . '/framework/functions/functions-theme.php'        );
require_once ( get_template_directory() . '/framework/admin/framework-default-texts.php'    );
require_once ( get_template_directory() . '/framework/functions/functions-user-rate.php'    );
require_once ( get_template_directory() . '/foxpush/foxpush.php'                            );
require_once ( get_template_directory() . '/framework/class/css-footer.php'                 );

function fb_opengraph() {
    global $post;
 
    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
			//$img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), array(200,200));

			
        } else {
            $img_src = get_stylesheet_directory_uri() . '/images/opengraph_image.jpg';
        }
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = $post->post_content;
        }
        ?>
 
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src[0]; ?>"/>
	<meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />  
<?php
    } elseif(is_page(5)){?>
       
    <meta property="og:title" content="Sanjh News | Online News Channel"/>
    <meta property="og:description" content="Sanjh News is a 24 hour online news and entertainment channel. Our objective is to bring a highly positive and soft image of Pakistan that is not accomplished yet in its true sense. We will deliver latest news bulletins, talk shows and many other entertaining programs. So Sanjh News is augmented to give audience all flavors of a contemporary"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://sanjhnews.com"/>
    <meta property="og:site_name" content="Online News Channel"/>
    <meta property="og:image" content="http://sanjhnews.com/wp-content/uploads/2018/03/samjnews.jpg"/>
<!-- 	<meta property="og:image:width" content="300" />
	<meta property="og:image:height" content="180" />  -->

   <?php }else {
		return;
	}
}
add_action('wp_head', 'fb_opengraph', 5);
