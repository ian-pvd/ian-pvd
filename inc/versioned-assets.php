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
		'work-js' => 'js/work.c3375fd.bundle.min.js',
		'work-css' => 'css/work.aea78bcf28bb9d534e64.min.css',
		'site-js' => 'js/site.c3375fd.bundle.min.js',
		'site-css' => 'css/site.aea78bcf28bb9d534e64.min.css',
		'page-js' => 'js/page.c3375fd.bundle.min.js',
		'page-css' => 'css/page.aea78bcf28bb9d534e64.min.css',
		'home-js' => 'js/home.c3375fd.bundle.min.js',
		'home-css' => 'css/home.aea78bcf28bb9d534e64.min.css',
		'article-js' => 'js/article.c3375fd.bundle.min.js',
		'article-css' => 'css/article.aea78bcf28bb9d534e64.min.css',
		'archive-js' => 'js/archive.c3375fd.bundle.min.js',
		'archive-css' => 'css/archive.aea78bcf28bb9d534e64.min.css',
		'admin-js' => 'js/admin.c3375fd.bundle.min.js',
		'admin-css' => 'css/admin.aea78bcf28bb9d534e64.min.css',
		'common-js' => 'js/common.c3375fd.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
