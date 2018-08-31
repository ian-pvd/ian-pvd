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
		'work-js' => 'js/work.4c92aa2.bundle.min.js',
		'work-css' => 'css/work.2c03f4e7c3b29db4f5d8.min.css',
		'site-js' => 'js/site.4c92aa2.bundle.min.js',
		'site-css' => 'css/site.2c03f4e7c3b29db4f5d8.min.css',
		'page-js' => 'js/page.4c92aa2.bundle.min.js',
		'page-css' => 'css/page.2c03f4e7c3b29db4f5d8.min.css',
		'home-js' => 'js/home.4c92aa2.bundle.min.js',
		'home-css' => 'css/home.2c03f4e7c3b29db4f5d8.min.css',
		'article-js' => 'js/article.4c92aa2.bundle.min.js',
		'article-css' => 'css/article.2c03f4e7c3b29db4f5d8.min.css',
		'archive-js' => 'js/archive.4c92aa2.bundle.min.js',
		'archive-css' => 'css/archive.2c03f4e7c3b29db4f5d8.min.css',
		'admin-js' => 'js/admin.4c92aa2.bundle.min.js',
		'admin-css' => 'css/admin.2c03f4e7c3b29db4f5d8.min.css',
		'common-js' => 'js/common.4c92aa2.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
