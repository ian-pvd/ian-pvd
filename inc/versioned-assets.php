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
		'site-js' => 'js/site.561b4d9.bundle.min.js',
		'site-css' => 'css/site.7a5349151976d6482764.min.css',
		'page-js' => 'js/page.561b4d9.bundle.min.js',
		'page-css' => 'css/page.7a5349151976d6482764.min.css',
		'home-js' => 'js/home.561b4d9.bundle.min.js',
		'home-css' => 'css/home.7a5349151976d6482764.min.css',
		'article-js' => 'js/article.561b4d9.bundle.min.js',
		'article-css' => 'css/article.7a5349151976d6482764.min.css',
		'archive-js' => 'js/archive.561b4d9.bundle.min.js',
		'archive-css' => 'css/archive.7a5349151976d6482764.min.css',
		'admin-js' => 'js/admin.561b4d9.bundle.min.js',
		'admin-css' => 'css/admin.7a5349151976d6482764.min.css',
		'common-js' => 'js/common.561b4d9.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
