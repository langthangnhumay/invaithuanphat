<?php
/**
 * Header template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link href="<?php bloginfo('template_url'); ?>/assets/css/toannh.css" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7TCZMFHMTY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7TCZMFHMTY');
</script>
<!-- Google tag (gtag.js) remarketing -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11039063429"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11039063429');
</script>
<style>
@media screen and (min-width: 850px)
{
	.large-2 {
		flex-basis: 20%;
		max-width: 20%;
	}
}
@media only screen and (min-width: 600px) {
  .page_san_pham img{
    object-fit: cover;
    height:282px
  }
}
.small-columns-1 .box-image .image-cover img{
	height:auto !important
}
</style>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">
