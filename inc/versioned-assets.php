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
		'work-js' => 'js/work.7509daf.bundle.min.js',
		'work-css' => 'css/work.95d365d41a9e2806c361.min.css',
		'site-js' => 'js/site.7509daf.bundle.min.js',
		'site-css' => 'css/site.95d365d41a9e2806c361.min.css',
		'page-js' => 'js/page.7509daf.bundle.min.js',
		'page-css' => 'css/page.95d365d41a9e2806c361.min.css',
		'home-js' => 'js/home.7509daf.bundle.min.js',
		'home-css' => 'css/home.95d365d41a9e2806c361.min.css',
		'article-js' => 'js/article.7509daf.bundle.min.js',
		'article-css' => 'css/article.95d365d41a9e2806c361.min.css',
		'archive-js' => 'js/archive.7509daf.bundle.min.js',
		'archive-css' => 'css/archive.95d365d41a9e2806c361.min.css',
		'admin-js' => 'js/admin.7509daf.bundle.min.js',
		'admin-css' => 'css/admin.95d365d41a9e2806c361.min.css',
		'common-js' => 'js/common.7509daf.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
