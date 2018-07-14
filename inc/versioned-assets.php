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
		'site-js' => 'js/site.074ab8d.bundle.min.js',
		'site-css' => 'css/site.63dec2c39c762d5a58f1.min.css',
		'page-js' => 'js/page.074ab8d.bundle.min.js',
		'page-css' => 'css/page.63dec2c39c762d5a58f1.min.css',
		'home-js' => 'js/home.074ab8d.bundle.min.js',
		'home-css' => 'css/home.63dec2c39c762d5a58f1.min.css',
		'article-js' => 'js/article.074ab8d.bundle.min.js',
		'article-css' => 'css/article.63dec2c39c762d5a58f1.min.css',
		'archive-js' => 'js/archive.074ab8d.bundle.min.js',
		'archive-css' => 'css/archive.63dec2c39c762d5a58f1.min.css',
		'admin-js' => 'js/admin.074ab8d.bundle.min.js',
		'admin-css' => 'css/admin.63dec2c39c762d5a58f1.min.css',
		'common-js' => 'js/common.074ab8d.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
