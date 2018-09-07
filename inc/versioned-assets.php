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
		'work-js' => 'js/work.9e6b3d3.bundle.min.js',
		'work-css' => 'css/work.9202887e13d1c3867c48.min.css',
		'site-js' => 'js/site.9e6b3d3.bundle.min.js',
		'site-css' => 'css/site.9202887e13d1c3867c48.min.css',
		'page-js' => 'js/page.9e6b3d3.bundle.min.js',
		'page-css' => 'css/page.9202887e13d1c3867c48.min.css',
		'home-js' => 'js/home.9e6b3d3.bundle.min.js',
		'home-css' => 'css/home.9202887e13d1c3867c48.min.css',
		'article-js' => 'js/article.9e6b3d3.bundle.min.js',
		'article-css' => 'css/article.9202887e13d1c3867c48.min.css',
		'archive-js' => 'js/archive.9e6b3d3.bundle.min.js',
		'archive-css' => 'css/archive.9202887e13d1c3867c48.min.css',
		'admin-js' => 'js/admin.9e6b3d3.bundle.min.js',
		'admin-css' => 'css/admin.9202887e13d1c3867c48.min.css',
		'common-js' => 'js/common.9e6b3d3.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
