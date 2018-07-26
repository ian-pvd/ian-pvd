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
		'site-js' => 'js/site.64c99e6.bundle.min.js',
		'site-css' => 'css/site.b87f2b19d17b103b10f6.min.css',
		'page-js' => 'js/page.64c99e6.bundle.min.js',
		'page-css' => 'css/page.b87f2b19d17b103b10f6.min.css',
		'home-js' => 'js/home.64c99e6.bundle.min.js',
		'home-css' => 'css/home.b87f2b19d17b103b10f6.min.css',
		'article-js' => 'js/article.64c99e6.bundle.min.js',
		'article-css' => 'css/article.b87f2b19d17b103b10f6.min.css',
		'archive-js' => 'js/archive.64c99e6.bundle.min.js',
		'archive-css' => 'css/archive.b87f2b19d17b103b10f6.min.css',
		'admin-js' => 'js/admin.64c99e6.bundle.min.js',
		'admin-css' => 'css/admin.b87f2b19d17b103b10f6.min.css',
		'common-js' => 'js/common.64c99e6.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
