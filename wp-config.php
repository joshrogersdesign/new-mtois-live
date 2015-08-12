<?php
# Database Configuration
define( 'DB_NAME', 'wp_mtois' );
define( 'DB_USER', 'mtois' );
define( 'DB_PASSWORD', 'qWvG9unPBHaYL8SiwyK8' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'C4A(#e_YQ3j,/3;VG}t~I}Am00}DX,n)%:Nj|AM!ccM:.O$Wuo/vyBIJ6Ds*%F%|');
define('SECURE_AUTH_KEY',  '[q*Yy!Z4@{*qB#zQA$zug=|y>- y>2K=N#?(W&L%g.-M|_RPeJDH>9:]-dr*-;j+');
define('LOGGED_IN_KEY',    '}&8pX-sN~cb`WtGJRH<9`lK#UdKXz+B6lKC+D*(j|g2P($EZj0#S*?<l/lK{*@fs');
define('NONCE_KEY',        'b[Z~(@pK6`:Qz?}uX1&fO.G%CI?m  t+{c]kBeANKuVU-2SPdGbh:1voP3m/o|r2');
define('AUTH_SALT',        '/I^N?Y<x(UA`SUHE>CxVIr L-|e1icFd:M- U6-,}(,)c<5pEn+EfARjBKZ`4?9o');
define('SECURE_AUTH_SALT', 'M=T@|L}GxI_#qg8>[2)a7I~{zRJgB,8Z[75D@Gbm2jH$+*;wXhQS&4bAUE,gx20*');
define('LOGGED_IN_SALT',   ':x|N6[d`7IQV;#o*NM,mCt|{?FXpxgeGc;W#]^>Y].y1Irmt]D0&>d?Z%:?|gqS?');
define('NONCE_SALT',       '}ep&=7];(jRb&-f!|S]EEMk6[f)-/@^)4GvLkPK/[iT2$43PtR}?Loy;5z4uD#9z');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mtois' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', 'e68eb16525cc013844b4b356479a1c979e64704f' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '41230' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '45.79.139.173' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mtois.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-41230', );

$wpe_special_ips=array ( 0 => '45.79.139.173', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
