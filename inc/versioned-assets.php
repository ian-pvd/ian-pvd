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
		'site-js' => 'js/site.541c1ad.bundle.min.js',
		'site-css' => 'css/site.dccac0cb56bc3e81b4f4.min.css',
		'page-js' => 'js/page.541c1ad.bundle.min.js',
		'page-css' => 'css/page.dccac0cb56bc3e81b4f4.min.css',
		'home-js' => 'js/home.541c1ad.bundle.min.js',
		'home-css' => 'css/home.dccac0cb56bc3e81b4f4.min.css',
		'article-js' => 'js/article.541c1ad.bundle.min.js',
		'article-css' => 'css/article.dccac0cb56bc3e81b4f4.min.css',
		'archive-js' => 'js/archive.541c1ad.bundle.min.js',
		'archive-css' => 'css/archive.dccac0cb56bc3e81b4f4.min.css',
		'admin-js' => 'js/admin.541c1ad.bundle.min.js',
		'admin-css' => 'css/admin.dccac0cb56bc3e81b4f4.min.css',
		'common-js' => 'js/common.541c1ad.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
