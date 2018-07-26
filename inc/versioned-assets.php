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
		'site-js' => 'js/site.bb5c42a.bundle.min.js',
		'site-css' => 'css/site.d7576c70498a3bff23ec.min.css',
		'page-js' => 'js/page.bb5c42a.bundle.min.js',
		'page-css' => 'css/page.d7576c70498a3bff23ec.min.css',
		'home-js' => 'js/home.bb5c42a.bundle.min.js',
		'home-css' => 'css/home.d7576c70498a3bff23ec.min.css',
		'article-js' => 'js/article.bb5c42a.bundle.min.js',
		'article-css' => 'css/article.d7576c70498a3bff23ec.min.css',
		'archive-js' => 'js/archive.bb5c42a.bundle.min.js',
		'archive-css' => 'css/archive.d7576c70498a3bff23ec.min.css',
		'admin-js' => 'js/admin.bb5c42a.bundle.min.js',
		'admin-css' => 'css/admin.d7576c70498a3bff23ec.min.css',
		'common-js' => 'js/common.bb5c42a.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
