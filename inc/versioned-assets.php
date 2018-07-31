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
		'work-js' => 'js/work.f8514d1.bundle.min.js',
		'work-css' => 'css/work.273e42301d466c6dc3f0.min.css',
		'site-js' => 'js/site.f8514d1.bundle.min.js',
		'site-css' => 'css/site.273e42301d466c6dc3f0.min.css',
		'page-js' => 'js/page.f8514d1.bundle.min.js',
		'page-css' => 'css/page.273e42301d466c6dc3f0.min.css',
		'home-js' => 'js/home.f8514d1.bundle.min.js',
		'home-css' => 'css/home.273e42301d466c6dc3f0.min.css',
		'article-js' => 'js/article.f8514d1.bundle.min.js',
		'article-css' => 'css/article.273e42301d466c6dc3f0.min.css',
		'archive-js' => 'js/archive.f8514d1.bundle.min.js',
		'archive-css' => 'css/archive.273e42301d466c6dc3f0.min.css',
		'admin-js' => 'js/admin.f8514d1.bundle.min.js',
		'admin-css' => 'css/admin.273e42301d466c6dc3f0.min.css',
		'common-js' => 'js/common.f8514d1.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
