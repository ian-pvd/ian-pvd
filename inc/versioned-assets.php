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
		'site-js' => 'js/site.ef00f45.bundle.min.js',
		'site-css' => 'css/site.eb0cd86114d24d6e1fe8.min.css',
		'page-js' => 'js/page.ef00f45.bundle.min.js',
		'page-css' => 'css/page.eb0cd86114d24d6e1fe8.min.css',
		'home-js' => 'js/home.ef00f45.bundle.min.js',
		'home-css' => 'css/home.eb0cd86114d24d6e1fe8.min.css',
		'article-js' => 'js/article.ef00f45.bundle.min.js',
		'article-css' => 'css/article.eb0cd86114d24d6e1fe8.min.css',
		'archive-js' => 'js/archive.ef00f45.bundle.min.js',
		'archive-css' => 'css/archive.eb0cd86114d24d6e1fe8.min.css',
		'admin-js' => 'js/admin.ef00f45.bundle.min.js',
		'admin-css' => 'css/admin.eb0cd86114d24d6e1fe8.min.css',
		'common-js' => 'js/common.ef00f45.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
