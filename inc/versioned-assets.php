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
		'article-js' => 'js/article.57b68bd.bundle.min.js',
		'article-css' => 'css/article.c0d21e50a44a8e6c4a41.min.css',
		'work-js' => 'js/work.57b68bd.bundle.min.js',
		'work-css' => 'css/work.c0d21e50a44a8e6c4a41.min.css',
		'site-js' => 'js/site.57b68bd.bundle.min.js',
		'site-css' => 'css/site.c0d21e50a44a8e6c4a41.min.css',
		'page-js' => 'js/page.57b68bd.bundle.min.js',
		'page-css' => 'css/page.c0d21e50a44a8e6c4a41.min.css',
		'home-js' => 'js/home.57b68bd.bundle.min.js',
		'home-css' => 'css/home.c0d21e50a44a8e6c4a41.min.css',
		'archive-js' => 'js/archive.57b68bd.bundle.min.js',
		'archive-css' => 'css/archive.c0d21e50a44a8e6c4a41.min.css',
		'admin-js' => 'js/admin.57b68bd.bundle.min.js',
		'admin-css' => 'css/admin.c0d21e50a44a8e6c4a41.min.css',
		'common-js' => 'js/common.57b68bd.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
