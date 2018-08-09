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
		'work-js' => 'js/work.68d8bd2.bundle.min.js',
		'work-css' => 'css/work.d4a8a3ccb3e55217342d.min.css',
		'site-js' => 'js/site.68d8bd2.bundle.min.js',
		'site-css' => 'css/site.d4a8a3ccb3e55217342d.min.css',
		'page-js' => 'js/page.68d8bd2.bundle.min.js',
		'page-css' => 'css/page.d4a8a3ccb3e55217342d.min.css',
		'home-js' => 'js/home.68d8bd2.bundle.min.js',
		'home-css' => 'css/home.d4a8a3ccb3e55217342d.min.css',
		'article-js' => 'js/article.68d8bd2.bundle.min.js',
		'article-css' => 'css/article.d4a8a3ccb3e55217342d.min.css',
		'archive-js' => 'js/archive.68d8bd2.bundle.min.js',
		'archive-css' => 'css/archive.d4a8a3ccb3e55217342d.min.css',
		'admin-js' => 'js/admin.68d8bd2.bundle.min.js',
		'admin-css' => 'css/admin.d4a8a3ccb3e55217342d.min.css',
		'common-js' => 'js/common.68d8bd2.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
