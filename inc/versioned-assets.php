<?php
/**
* Get the version for a given asset.
*
* @NOTE This file is written with a node build script. Beware of writing to it by hand.
* @param string $asset The asset name.
* @return string The asset version.
*/
function ianpvd_get_versioned_asset( $asset ) {
	$assets = array(
		'site-js' => 'js/site.5ad9f6b.bundle.min.js',
		'site-css' => 'css/site.15f0d31409175b114987.min.css',
		'page-js' => 'js/page.5ad9f6b.bundle.min.js',
		'page-css' => 'css/page.15f0d31409175b114987.min.css',
		'home-js' => 'js/home.5ad9f6b.bundle.min.js',
		'home-css' => 'css/home.15f0d31409175b114987.min.css',
		'article-js' => 'js/article.5ad9f6b.bundle.min.js',
		'article-css' => 'css/article.15f0d31409175b114987.min.css',
		'archive-js' => 'js/archive.5ad9f6b.bundle.min.js',
		'archive-css' => 'css/archive.15f0d31409175b114987.min.css',
		'admin-js' => 'js/admin.5ad9f6b.bundle.min.js',
		'admin-css' => 'css/admin.15f0d31409175b114987.min.css',
		'common-js' => 'js/common.5ad9f6b.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
