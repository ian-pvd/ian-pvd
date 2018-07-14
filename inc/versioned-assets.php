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
		'site-js' => 'js/site.73441b6.bundle.min.js',
		'site-css' => 'css/site.50f962268e4ccdcbd5e3.min.css',
		'page-js' => 'js/page.73441b6.bundle.min.js',
		'page-css' => 'css/page.50f962268e4ccdcbd5e3.min.css',
		'home-js' => 'js/home.73441b6.bundle.min.js',
		'home-css' => 'css/home.50f962268e4ccdcbd5e3.min.css',
		'article-js' => 'js/article.73441b6.bundle.min.js',
		'article-css' => 'css/article.50f962268e4ccdcbd5e3.min.css',
		'archive-js' => 'js/archive.73441b6.bundle.min.js',
		'archive-css' => 'css/archive.50f962268e4ccdcbd5e3.min.css',
		'admin-js' => 'js/admin.73441b6.bundle.min.js',
		'admin-css' => 'css/admin.50f962268e4ccdcbd5e3.min.css',
		'common-js' => 'js/common.73441b6.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
