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
		'work-js' => 'js/work.1ae925f.bundle.min.js',
		'work-css' => 'css/work.a645b9db0c74ac0cd512.min.css',
		'site-js' => 'js/site.1ae925f.bundle.min.js',
		'site-css' => 'css/site.a645b9db0c74ac0cd512.min.css',
		'page-js' => 'js/page.1ae925f.bundle.min.js',
		'page-css' => 'css/page.a645b9db0c74ac0cd512.min.css',
		'home-js' => 'js/home.1ae925f.bundle.min.js',
		'home-css' => 'css/home.a645b9db0c74ac0cd512.min.css',
		'article-js' => 'js/article.1ae925f.bundle.min.js',
		'article-css' => 'css/article.a645b9db0c74ac0cd512.min.css',
		'archive-js' => 'js/archive.1ae925f.bundle.min.js',
		'archive-css' => 'css/archive.a645b9db0c74ac0cd512.min.css',
		'admin-js' => 'js/admin.1ae925f.bundle.min.js',
		'admin-css' => 'css/admin.a645b9db0c74ac0cd512.min.css',
		'common-js' => 'js/common.1ae925f.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
