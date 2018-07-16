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
		'site-js' => 'js/site.9abb89f.bundle.min.js',
		'site-css' => 'css/site.e8e0aec536509bbd311e.min.css',
		'page-js' => 'js/page.9abb89f.bundle.min.js',
		'page-css' => 'css/page.e8e0aec536509bbd311e.min.css',
		'home-js' => 'js/home.9abb89f.bundle.min.js',
		'home-css' => 'css/home.e8e0aec536509bbd311e.min.css',
		'article-js' => 'js/article.9abb89f.bundle.min.js',
		'article-css' => 'css/article.e8e0aec536509bbd311e.min.css',
		'archive-js' => 'js/archive.9abb89f.bundle.min.js',
		'archive-css' => 'css/archive.e8e0aec536509bbd311e.min.css',
		'admin-js' => 'js/admin.9abb89f.bundle.min.js',
		'admin-css' => 'css/admin.e8e0aec536509bbd311e.min.css',
		'common-js' => 'js/common.9abb89f.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
