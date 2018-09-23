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
		'article-js' => 'js/article.0ec460d.bundle.min.js',
		'article-css' => 'css/article.d1d7dfdd3314875e10e1.min.css',
		'work-js' => 'js/work.0ec460d.bundle.min.js',
		'work-css' => 'css/work.d1d7dfdd3314875e10e1.min.css',
		'site-js' => 'js/site.0ec460d.bundle.min.js',
		'site-css' => 'css/site.d1d7dfdd3314875e10e1.min.css',
		'page-js' => 'js/page.0ec460d.bundle.min.js',
		'page-css' => 'css/page.d1d7dfdd3314875e10e1.min.css',
		'home-js' => 'js/home.0ec460d.bundle.min.js',
		'home-css' => 'css/home.d1d7dfdd3314875e10e1.min.css',
		'archive-js' => 'js/archive.0ec460d.bundle.min.js',
		'archive-css' => 'css/archive.d1d7dfdd3314875e10e1.min.css',
		'admin-js' => 'js/admin.0ec460d.bundle.min.js',
		'admin-css' => 'css/admin.d1d7dfdd3314875e10e1.min.css',
		'common-js' => 'js/common.0ec460d.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
