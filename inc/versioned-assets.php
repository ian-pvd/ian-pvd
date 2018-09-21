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
		'article-js' => 'js/article.43eb6bd.bundle.min.js',
		'article-css' => 'css/article.e39f7e6248907a03ea93.min.css',
		'work-js' => 'js/work.43eb6bd.bundle.min.js',
		'work-css' => 'css/work.e39f7e6248907a03ea93.min.css',
		'site-js' => 'js/site.43eb6bd.bundle.min.js',
		'site-css' => 'css/site.e39f7e6248907a03ea93.min.css',
		'page-js' => 'js/page.43eb6bd.bundle.min.js',
		'page-css' => 'css/page.e39f7e6248907a03ea93.min.css',
		'home-js' => 'js/home.43eb6bd.bundle.min.js',
		'home-css' => 'css/home.e39f7e6248907a03ea93.min.css',
		'archive-js' => 'js/archive.43eb6bd.bundle.min.js',
		'archive-css' => 'css/archive.e39f7e6248907a03ea93.min.css',
		'admin-js' => 'js/admin.43eb6bd.bundle.min.js',
		'admin-css' => 'css/admin.e39f7e6248907a03ea93.min.css',
		'common-js' => 'js/common.43eb6bd.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
