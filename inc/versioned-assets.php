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
		'site-js' => 'js/site.b464747.bundle.min.js',
		'site-css' => 'css/site.29734669b2ddde24b0eb.min.css',
		'page-js' => 'js/page.b464747.bundle.min.js',
		'page-css' => 'css/page.29734669b2ddde24b0eb.min.css',
		'home-js' => 'js/home.b464747.bundle.min.js',
		'home-css' => 'css/home.29734669b2ddde24b0eb.min.css',
		'article-js' => 'js/article.b464747.bundle.min.js',
		'article-css' => 'css/article.29734669b2ddde24b0eb.min.css',
		'archive-js' => 'js/archive.b464747.bundle.min.js',
		'archive-css' => 'css/archive.29734669b2ddde24b0eb.min.css',
		'admin-js' => 'js/admin.b464747.bundle.min.js',
		'admin-css' => 'css/admin.29734669b2ddde24b0eb.min.css',
		'common-js' => 'js/common.b464747.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
