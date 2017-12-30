<?php
/**
 * ヘッダーメニュのテンプレート
 *
 * @package WordPress
 * @subpackage ji-no-theme
 * @since 1.0
 * @version 1.1
 */?>

<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
    <ul id="top-menu" class="menu">
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
        'items_wrap'     => '%3$s',
        'container'      => false,
	) ); ?>
    <?php if (get_locale() == 'en_US') { ?>
        <li class="lang-ja"><a href="<?php echo qtranxf_convertURL($current_url, 'ja', '', true);?>" hreflang="ja" title="日本語" class="qtranxs_image qtranxs_image_ja"><img src="<?php echo plugins_url('qtranslate-x'); ?>/flags/jp.png" alt="日本語" /><span style="display:none">日本語</span></a></li>
    <?php } else if (get_locale() == 'ja') { ?>
        <li class="lang-en"><a href="<?php echo qtranxf_convertURL($current_url, 'en','',  true);?>" hreflang="en" title="English" class="qtranxs_image qtranxs_image_en"><img src="<?php echo plugins_url('qtranslate-x'); ?>/flags/us.png" alt="English" /><span style="display:none">English</span></a></li>
    <?php } ?>
    </ul>
</nav>
