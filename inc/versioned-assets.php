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
		'work-js' => 'js/work.540272d.bundle.min.js',
		'work-css' => 'css/work.2b66bf5bb3d7a3ae9c92.min.css',
		'site-js' => 'js/site.540272d.bundle.min.js',
		'site-css' => 'css/site.2b66bf5bb3d7a3ae9c92.min.css',
		'page-js' => 'js/page.540272d.bundle.min.js',
		'page-css' => 'css/page.2b66bf5bb3d7a3ae9c92.min.css',
		'home-js' => 'js/home.540272d.bundle.min.js',
		'home-css' => 'css/home.2b66bf5bb3d7a3ae9c92.min.css',
		'article-js' => 'js/article.540272d.bundle.min.js',
		'article-css' => 'css/article.2b66bf5bb3d7a3ae9c92.min.css',
		'archive-js' => 'js/archive.540272d.bundle.min.js',
		'archive-css' => 'css/archive.2b66bf5bb3d7a3ae9c92.min.css',
		'admin-js' => 'js/admin.540272d.bundle.min.js',
		'admin-css' => 'css/admin.2b66bf5bb3d7a3ae9c92.min.css',
		'common-js' => 'js/common.540272d.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
