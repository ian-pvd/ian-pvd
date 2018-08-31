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
		'work-js' => 'js/work.06ea3d1.bundle.min.js',
		'work-css' => 'css/work.7e5cc3175b06f3b4800b.min.css',
		'site-js' => 'js/site.06ea3d1.bundle.min.js',
		'site-css' => 'css/site.7e5cc3175b06f3b4800b.min.css',
		'page-js' => 'js/page.06ea3d1.bundle.min.js',
		'page-css' => 'css/page.7e5cc3175b06f3b4800b.min.css',
		'home-js' => 'js/home.06ea3d1.bundle.min.js',
		'home-css' => 'css/home.7e5cc3175b06f3b4800b.min.css',
		'article-js' => 'js/article.06ea3d1.bundle.min.js',
		'article-css' => 'css/article.7e5cc3175b06f3b4800b.min.css',
		'archive-js' => 'js/archive.06ea3d1.bundle.min.js',
		'archive-css' => 'css/archive.7e5cc3175b06f3b4800b.min.css',
		'admin-js' => 'js/admin.06ea3d1.bundle.min.js',
		'admin-css' => 'css/admin.7e5cc3175b06f3b4800b.min.css',
		'common-js' => 'js/common.06ea3d1.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
