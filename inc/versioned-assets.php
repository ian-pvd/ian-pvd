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
		'article-js' => 'js/article.7f83fcc.bundle.min.js',
		'article-css' => 'css/article.add5310f0f442e1dd771.min.css',
		'work-js' => 'js/work.7f83fcc.bundle.min.js',
		'work-css' => 'css/work.add5310f0f442e1dd771.min.css',
		'site-js' => 'js/site.7f83fcc.bundle.min.js',
		'site-css' => 'css/site.add5310f0f442e1dd771.min.css',
		'page-js' => 'js/page.7f83fcc.bundle.min.js',
		'page-css' => 'css/page.add5310f0f442e1dd771.min.css',
		'home-js' => 'js/home.7f83fcc.bundle.min.js',
		'home-css' => 'css/home.add5310f0f442e1dd771.min.css',
		'archive-js' => 'js/archive.7f83fcc.bundle.min.js',
		'archive-css' => 'css/archive.add5310f0f442e1dd771.min.css',
		'admin-js' => 'js/admin.7f83fcc.bundle.min.js',
		'admin-css' => 'css/admin.add5310f0f442e1dd771.min.css',
		'common-js' => 'js/common.7f83fcc.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
