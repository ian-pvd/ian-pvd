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
		'work-js' => 'js/work.7be8f7f.bundle.min.js',
		'work-css' => 'css/work.98022c3396671c3b50c3.min.css',
		'site-js' => 'js/site.7be8f7f.bundle.min.js',
		'site-css' => 'css/site.98022c3396671c3b50c3.min.css',
		'page-js' => 'js/page.7be8f7f.bundle.min.js',
		'page-css' => 'css/page.98022c3396671c3b50c3.min.css',
		'home-js' => 'js/home.7be8f7f.bundle.min.js',
		'home-css' => 'css/home.98022c3396671c3b50c3.min.css',
		'article-js' => 'js/article.7be8f7f.bundle.min.js',
		'article-css' => 'css/article.98022c3396671c3b50c3.min.css',
		'archive-js' => 'js/archive.7be8f7f.bundle.min.js',
		'archive-css' => 'css/archive.98022c3396671c3b50c3.min.css',
		'admin-js' => 'js/admin.7be8f7f.bundle.min.js',
		'admin-css' => 'css/admin.98022c3396671c3b50c3.min.css',
		'common-js' => 'js/common.7be8f7f.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
