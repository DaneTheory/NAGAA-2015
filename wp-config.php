<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nagaaDB');

/** MySQL database username */
define('DB_USER', 'nagaa');

/** MySQL database password */
define('DB_PASSWORD', 'nagaa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sH-IgSxy+] !BXL +8_0(dUni#C$ExH&;Fys!==0gLl3aeeDH=/{7Y5}*q0K+B1l');
define('SECURE_AUTH_KEY',  'eE;-|IOh7,gMMohWy;s[*-hnX$~(!D,=mo+2(P)QV$Vw@Z%~=)Z@l3K5r=|q`_aN');
define('LOGGED_IN_KEY',    'Hk8fd2p6GdEzNrv|+W;wL*(Vb}IHq&jY0|*z`zO>oUGodXrh2y5L@ &+C5SGPS|A');
define('NONCE_KEY',        '**bpR(won85lQvo%6gs?W=Yj-OHV@G+@y,oS a|/2q#hiEr66dpdW3+5)P|Z|#@w');
define('AUTH_SALT',        '# 1)!X/,}lQ. ,G/|/+ G45@+mDbup,[y8dPZIY/SO(.L4ur$I|ePiPeJxb3VXia');
define('SECURE_AUTH_SALT', 'gSE{|;r_9?7=X=CxrJz<11:@kqyUV#r}X6KSgV3wb3V]W|CLU])K.tEwlUkc_ON5');
define('LOGGED_IN_SALT',   'KOIGBnBz?+J_IBEt7-5oMd]!,n38B,oXq3jUb5q7W,mH.y<$tE[!R4|VVTy^:.z!');
define('NONCE_SALT',       ')Rh},}[J>J4(*|$+P~!p9-a?FSkl{#M4m[I-3Z7xWR7TnZMkJ=dhVa+5.Q-=s?aU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** For Roots Child Theming */
define('WP_ENV', 'development');
add_theme_support('soil-clean-up');
add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');