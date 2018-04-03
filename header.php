<?php
// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php if( woohoo_get_option( 'responsive' ) ) : ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<?php else : ?>
    <meta name="viewport" content="width=1045" />
<?php endif; ?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108731518-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108731518-1');
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5323964536437137",
    enable_page_level_ads: true
  });
</script>

</head>
<body <?php body_class(); ?> itemscope=itemscope itemtype="https://schema.org/WebPage">

<?php woohoo_template1_header(); ?>
<div class="page-outer bdaia-header-default<?php echo woohoo_page_class(); ?>">
	<div class="bg-cover"></div>
	<?php if ( ! woohoo_get_option( 'dis_mobile_menu' ) ) { ?>
		<aside id="bd-MobileSiderbar">

			<?php if( woohoo_get_option( 'mobile_search' ) ){ ?>
				<div class="search-mobile">
					<?php get_search_form(); ?>
				</div>
			<?php } ?>

			<div id="mobile-menu"></div>

			<?php if( woohoo_get_option( 'mobile_social' ) ){ ?>
				<div class="widget-social-links bdaia-social-io-colored">
					<div class="sl-widget-inner">
						<?php woohoo_social( 'yes', '35', '' ); ?>
					</div>
				</div>
			<?php } ?>

		</aside>
	<?php } ?>

	<div id="page">
		<div class="inner-wrapper">
			<div id="warp" class="clearfix <?php echo woohoo_sidebar_class(); ?>">
				<?php get_template_part( 'framework/headers/header-default' ); ?>
				<?php get_template_part( 'framework/single/post-template-header' ); ?>

                <?php if ( ! woohoo_get_option( 'bdaia_disable_builder_page' ) ) get_template_part( 'framework/global/bdaia-feature-posts' ); ?>

				<?php if( woohoo_get_option( 'bdaia_head_bn_position' ) == "below_feature_posts" ) get_template_part( 'framework/global/bdaia-breaking-news' ); ?>
				
                <?php if ( ! woohoo_get_option( 'bdaia_disable_builder_page' ) ) get_template_part( 'framework/global/bdaia-post-carousel' ); ?>
                
				<?php if( woohoo_get_option( 'bdaia_mn_position' ) == "hibryd_menu" ) { ?>
					<div class="cfix"></div>
					<div class="bdaia-hibryd-e3">
						<?php get_template_part( 'framework/headers/header-e3' ); ?>
					</div>
					<div class="cfix"></div>
				<?php } ?>
				<?php if( woohoo_get_option( 'bdaia_head_bn_position' ) == "above_content" ) get_template_part( 'framework/global/bdaia-breaking-news' ); ?>
				<?php if( is_category() ) get_template_part( 'framework/global/bdaia-cat-feature-posts' ); ?>
				<?php woohoo_above_content_box(); ?>
				<div class="bdMain">