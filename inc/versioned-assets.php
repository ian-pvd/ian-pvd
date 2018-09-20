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
		'article-js' => 'js/article.9c6762a.bundle.min.js',
		'article-css' => 'css/article.7f5179c1d1e5a4ac44a8.min.css',
		'work-js' => 'js/work.9c6762a.bundle.min.js',
		'work-css' => 'css/work.7f5179c1d1e5a4ac44a8.min.css',
		'site-js' => 'js/site.9c6762a.bundle.min.js',
		'site-css' => 'css/site.7f5179c1d1e5a4ac44a8.min.css',
		'page-js' => 'js/page.9c6762a.bundle.min.js',
		'page-css' => 'css/page.7f5179c1d1e5a4ac44a8.min.css',
		'home-js' => 'js/home.9c6762a.bundle.min.js',
		'home-css' => 'css/home.7f5179c1d1e5a4ac44a8.min.css',
		'archive-js' => 'js/archive.9c6762a.bundle.min.js',
		'archive-css' => 'css/archive.7f5179c1d1e5a4ac44a8.min.css',
		'admin-js' => 'js/admin.9c6762a.bundle.min.js',
		'admin-css' => 'css/admin.7f5179c1d1e5a4ac44a8.min.css',
		'common-js' => 'js/common.9c6762a.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
