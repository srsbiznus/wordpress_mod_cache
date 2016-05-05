<?php
/**
* Plugin Name: LW htaccess fix
* Description: This plugin adds corrects the default htaccess rules to work with mod_cache
* Version: 1.0.0
* Author: Michael Wineland
* License: GPL2
*/
add_filter( 'mod_rewrite_rules', 'lw_fix_htaccess' );
function lw_fix_htaccess( $rules ){
   $pattern = '/RewriteRule . (.*index.php) (\[L\]\n)/i';
   $replacement = 'RewriteRule ^(.*)$ ${1}/\$1 ${2}';
   $rules = preg_replace($pattern, $replacement, $rules);
   return $rules;
}
