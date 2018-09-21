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
		'article-js' => 'js/article.1725350.bundle.min.js',
		'article-css' => 'css/article.9c9307b4f45dfdbb437c.min.css',
		'work-js' => 'js/work.1725350.bundle.min.js',
		'work-css' => 'css/work.9c9307b4f45dfdbb437c.min.css',
		'site-js' => 'js/site.1725350.bundle.min.js',
		'site-css' => 'css/site.9c9307b4f45dfdbb437c.min.css',
		'page-js' => 'js/page.1725350.bundle.min.js',
		'page-css' => 'css/page.9c9307b4f45dfdbb437c.min.css',
		'home-js' => 'js/home.1725350.bundle.min.js',
		'home-css' => 'css/home.9c9307b4f45dfdbb437c.min.css',
		'archive-js' => 'js/archive.1725350.bundle.min.js',
		'archive-css' => 'css/archive.9c9307b4f45dfdbb437c.min.css',
		'admin-js' => 'js/admin.1725350.bundle.min.js',
		'admin-css' => 'css/admin.9c9307b4f45dfdbb437c.min.css',
		'common-js' => 'js/common.1725350.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
