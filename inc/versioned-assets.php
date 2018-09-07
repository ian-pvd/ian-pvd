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
		'work-js' => 'js/work.3b2234b.bundle.min.js',
		'work-css' => 'css/work.a77a13007a9a3d37a22f.min.css',
		'site-js' => 'js/site.3b2234b.bundle.min.js',
		'site-css' => 'css/site.a77a13007a9a3d37a22f.min.css',
		'page-js' => 'js/page.3b2234b.bundle.min.js',
		'page-css' => 'css/page.a77a13007a9a3d37a22f.min.css',
		'home-js' => 'js/home.3b2234b.bundle.min.js',
		'home-css' => 'css/home.a77a13007a9a3d37a22f.min.css',
		'article-js' => 'js/article.3b2234b.bundle.min.js',
		'article-css' => 'css/article.a77a13007a9a3d37a22f.min.css',
		'archive-js' => 'js/archive.3b2234b.bundle.min.js',
		'archive-css' => 'css/archive.a77a13007a9a3d37a22f.min.css',
		'admin-js' => 'js/admin.3b2234b.bundle.min.js',
		'admin-css' => 'css/admin.a77a13007a9a3d37a22f.min.css',
		'common-js' => 'js/common.3b2234b.bundle.min.js',
	);
	return ! empty( $assets[ $asset ] ) ? $assets[ $asset ] : false;
}
