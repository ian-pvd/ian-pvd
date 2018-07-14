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
		'site-js' => 'js/site.0c390f8.bundle.min.js',
		'site-css' => 'css/site.5f1d1a2033d6a3912681.min.css',
		'page-js' => 'js/page.0c390f8.bundle.min.js',
		'page-css' => 'css/page.5f1d1a2033d6a3912681.min.css',
		'home-js' => 'js/home.0c390f8.bundle.min.js',
		'home-css' => 'css/home.5f1d1a2033d6a3912681.min.css',
		'article-js' => 'js/article.0c390f8.bundle.min.js',
		'article-css' => 'css/article.5f1d1a2033d6a3912681.min.css',
		'archive-js' => 'js/archive.0c390f8.bundle.min.js',
		'archive-css' => 'css/archive.5f1d1a2033d6a3912681.min.css',
		'admin-js' => 'js/admin.0c390f8.bundle.min.js',
		'admin-css' => 'css/admin.5f1d1a2033d6a3912681.min.css',
		'common-js' => 'js/common.0c390f8.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
