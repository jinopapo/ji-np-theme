<?php
/**
 * ヘッダーを表示するテンプレート
 *
 * @package WordPress
 * @subpackage ji-no-theme
 * @since 1.0
 * @version 1.1
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php /* プラグインのために入れておく */?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
	   <?php if ( has_nav_menu( 'top' ) ) : ?>
           <?php /*ヘッダーメニューがあればヘッダーを作る*/ ?>
	       <div class="navigation-top">
			   <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
		   </div>
    	   <?php endif; ?>

       <?php
       //ヘッダーの画像を表示
       if ( is_home() ):
           get_template_part( 'template-parts/header/header', 'image' );
       endif
       ?>

	</header>
	<div class="site-content-contain">
		<div id="content" class="site-content">
