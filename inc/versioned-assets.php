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
		'article-js' => 'js/article.ab05115.bundle.min.js',
		'article-css' => 'css/article.dcb2e040668aca39814f.min.css',
		'work-js' => 'js/work.ab05115.bundle.min.js',
		'work-css' => 'css/work.dcb2e040668aca39814f.min.css',
		'site-js' => 'js/site.ab05115.bundle.min.js',
		'site-css' => 'css/site.dcb2e040668aca39814f.min.css',
		'page-js' => 'js/page.ab05115.bundle.min.js',
		'page-css' => 'css/page.dcb2e040668aca39814f.min.css',
		'home-js' => 'js/home.ab05115.bundle.min.js',
		'home-css' => 'css/home.dcb2e040668aca39814f.min.css',
		'archive-js' => 'js/archive.ab05115.bundle.min.js',
		'archive-css' => 'css/archive.dcb2e040668aca39814f.min.css',
		'admin-js' => 'js/admin.ab05115.bundle.min.js',
		'admin-css' => 'css/admin.dcb2e040668aca39814f.min.css',
		'common-js' => 'js/common.ab05115.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
