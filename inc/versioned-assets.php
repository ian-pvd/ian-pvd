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
		'site-js' => 'js/site.63ef7bb.bundle.min.js',
		'site-css' => 'css/site.7b9bf7811c71fe30cedc.min.css',
		'page-js' => 'js/page.63ef7bb.bundle.min.js',
		'page-css' => 'css/page.7b9bf7811c71fe30cedc.min.css',
		'home-js' => 'js/home.63ef7bb.bundle.min.js',
		'home-css' => 'css/home.7b9bf7811c71fe30cedc.min.css',
		'article-js' => 'js/article.63ef7bb.bundle.min.js',
		'article-css' => 'css/article.7b9bf7811c71fe30cedc.min.css',
		'archive-js' => 'js/archive.63ef7bb.bundle.min.js',
		'archive-css' => 'css/archive.7b9bf7811c71fe30cedc.min.css',
		'admin-js' => 'js/admin.63ef7bb.bundle.min.js',
		'admin-css' => 'css/admin.7b9bf7811c71fe30cedc.min.css',
		'common-js' => 'js/common.63ef7bb.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
