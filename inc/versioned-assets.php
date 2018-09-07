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
		'work-js' => 'js/work.b20649d.bundle.min.js',
		'work-css' => 'css/work.b6eb587e5050d3339fc9.min.css',
		'site-js' => 'js/site.b20649d.bundle.min.js',
		'site-css' => 'css/site.b6eb587e5050d3339fc9.min.css',
		'page-js' => 'js/page.b20649d.bundle.min.js',
		'page-css' => 'css/page.b6eb587e5050d3339fc9.min.css',
		'home-js' => 'js/home.b20649d.bundle.min.js',
		'home-css' => 'css/home.b6eb587e5050d3339fc9.min.css',
		'article-js' => 'js/article.b20649d.bundle.min.js',
		'article-css' => 'css/article.b6eb587e5050d3339fc9.min.css',
		'archive-js' => 'js/archive.b20649d.bundle.min.js',
		'archive-css' => 'css/archive.b6eb587e5050d3339fc9.min.css',
		'admin-js' => 'js/admin.b20649d.bundle.min.js',
		'admin-css' => 'css/admin.b6eb587e5050d3339fc9.min.css',
		'common-js' => 'js/common.b20649d.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
