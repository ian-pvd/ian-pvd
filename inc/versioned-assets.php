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
		'work-js' => 'js/work.e0066ae.bundle.min.js',
		'work-css' => 'css/work.35fd5c440177138c97b6.min.css',
		'site-js' => 'js/site.e0066ae.bundle.min.js',
		'site-css' => 'css/site.35fd5c440177138c97b6.min.css',
		'page-js' => 'js/page.e0066ae.bundle.min.js',
		'page-css' => 'css/page.35fd5c440177138c97b6.min.css',
		'home-js' => 'js/home.e0066ae.bundle.min.js',
		'home-css' => 'css/home.35fd5c440177138c97b6.min.css',
		'article-js' => 'js/article.e0066ae.bundle.min.js',
		'article-css' => 'css/article.35fd5c440177138c97b6.min.css',
		'archive-js' => 'js/archive.e0066ae.bundle.min.js',
		'archive-css' => 'css/archive.35fd5c440177138c97b6.min.css',
		'admin-js' => 'js/admin.e0066ae.bundle.min.js',
		'admin-css' => 'css/admin.35fd5c440177138c97b6.min.css',
		'common-js' => 'js/common.e0066ae.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
