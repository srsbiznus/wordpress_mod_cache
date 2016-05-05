<?php
/*
Plugin Name: mod_cache rewrite
*/

function fix_mod_rewrite_rules ($rewrites) {
	$rewrites = str_replace('RewriteRule . /index.php', 'RewriteRule ^(.*)$ /index.php/$1', $rewrites);
	return $rewrites;
}

add_filter('mod_rewrite_rules', 'fix_mod_rewrite_rules');
