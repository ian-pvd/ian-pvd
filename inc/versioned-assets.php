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
		'work-js' => 'js/work.97b402a.bundle.min.js',
		'work-css' => 'css/work.24a97ad27d0ea18b2ce8.min.css',
		'site-js' => 'js/site.97b402a.bundle.min.js',
		'site-css' => 'css/site.24a97ad27d0ea18b2ce8.min.css',
		'page-js' => 'js/page.97b402a.bundle.min.js',
		'page-css' => 'css/page.24a97ad27d0ea18b2ce8.min.css',
		'home-js' => 'js/home.97b402a.bundle.min.js',
		'home-css' => 'css/home.24a97ad27d0ea18b2ce8.min.css',
		'article-js' => 'js/article.97b402a.bundle.min.js',
		'article-css' => 'css/article.24a97ad27d0ea18b2ce8.min.css',
		'archive-js' => 'js/archive.97b402a.bundle.min.js',
		'archive-css' => 'css/archive.24a97ad27d0ea18b2ce8.min.css',
		'admin-js' => 'js/admin.97b402a.bundle.min.js',
		'admin-css' => 'css/admin.24a97ad27d0ea18b2ce8.min.css',
		'common-js' => 'js/common.97b402a.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
