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
		'work-js' => 'js/work.aa91b1b.bundle.min.js',
		'work-css' => 'css/work.4ae2296d8feb18408cab.min.css',
		'site-js' => 'js/site.aa91b1b.bundle.min.js',
		'site-css' => 'css/site.4ae2296d8feb18408cab.min.css',
		'page-js' => 'js/page.aa91b1b.bundle.min.js',
		'page-css' => 'css/page.4ae2296d8feb18408cab.min.css',
		'home-js' => 'js/home.aa91b1b.bundle.min.js',
		'home-css' => 'css/home.4ae2296d8feb18408cab.min.css',
		'article-js' => 'js/article.aa91b1b.bundle.min.js',
		'article-css' => 'css/article.4ae2296d8feb18408cab.min.css',
		'archive-js' => 'js/archive.aa91b1b.bundle.min.js',
		'archive-css' => 'css/archive.4ae2296d8feb18408cab.min.css',
		'admin-js' => 'js/admin.aa91b1b.bundle.min.js',
		'admin-css' => 'css/admin.4ae2296d8feb18408cab.min.css',
		'common-js' => 'js/common.aa91b1b.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
