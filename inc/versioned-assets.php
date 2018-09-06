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
		'work-js' => 'js/work.cbe2d3e.bundle.min.js',
		'work-css' => 'css/work.b234f364eb2aca09bbec.min.css',
		'site-js' => 'js/site.cbe2d3e.bundle.min.js',
		'site-css' => 'css/site.b234f364eb2aca09bbec.min.css',
		'page-js' => 'js/page.cbe2d3e.bundle.min.js',
		'page-css' => 'css/page.b234f364eb2aca09bbec.min.css',
		'home-js' => 'js/home.cbe2d3e.bundle.min.js',
		'home-css' => 'css/home.b234f364eb2aca09bbec.min.css',
		'article-js' => 'js/article.cbe2d3e.bundle.min.js',
		'article-css' => 'css/article.b234f364eb2aca09bbec.min.css',
		'archive-js' => 'js/archive.cbe2d3e.bundle.min.js',
		'archive-css' => 'css/archive.b234f364eb2aca09bbec.min.css',
		'admin-js' => 'js/admin.cbe2d3e.bundle.min.js',
		'admin-css' => 'css/admin.b234f364eb2aca09bbec.min.css',
		'common-js' => 'js/common.cbe2d3e.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
