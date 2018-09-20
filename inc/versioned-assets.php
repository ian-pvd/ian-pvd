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
		'article-js' => 'js/article.e2940ad.bundle.min.js',
		'article-css' => 'css/article.ab4b8ffb7376c355fd51.min.css',
		'work-js' => 'js/work.e2940ad.bundle.min.js',
		'work-css' => 'css/work.ab4b8ffb7376c355fd51.min.css',
		'site-js' => 'js/site.e2940ad.bundle.min.js',
		'site-css' => 'css/site.ab4b8ffb7376c355fd51.min.css',
		'page-js' => 'js/page.e2940ad.bundle.min.js',
		'page-css' => 'css/page.ab4b8ffb7376c355fd51.min.css',
		'home-js' => 'js/home.e2940ad.bundle.min.js',
		'home-css' => 'css/home.ab4b8ffb7376c355fd51.min.css',
		'archive-js' => 'js/archive.e2940ad.bundle.min.js',
		'archive-css' => 'css/archive.ab4b8ffb7376c355fd51.min.css',
		'admin-js' => 'js/admin.e2940ad.bundle.min.js',
		'admin-css' => 'css/admin.ab4b8ffb7376c355fd51.min.css',
		'common-js' => 'js/common.e2940ad.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
