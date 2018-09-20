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
		'article-js' => 'js/article.83836b6.bundle.min.js',
		'article-css' => 'css/article.f29c6b7cbe11282f273b.min.css',
		'work-js' => 'js/work.83836b6.bundle.min.js',
		'work-css' => 'css/work.f29c6b7cbe11282f273b.min.css',
		'site-js' => 'js/site.83836b6.bundle.min.js',
		'site-css' => 'css/site.f29c6b7cbe11282f273b.min.css',
		'page-js' => 'js/page.83836b6.bundle.min.js',
		'page-css' => 'css/page.f29c6b7cbe11282f273b.min.css',
		'home-js' => 'js/home.83836b6.bundle.min.js',
		'home-css' => 'css/home.f29c6b7cbe11282f273b.min.css',
		'archive-js' => 'js/archive.83836b6.bundle.min.js',
		'archive-css' => 'css/archive.f29c6b7cbe11282f273b.min.css',
		'admin-js' => 'js/admin.83836b6.bundle.min.js',
		'admin-css' => 'css/admin.f29c6b7cbe11282f273b.min.css',
		'common-js' => 'js/common.83836b6.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
