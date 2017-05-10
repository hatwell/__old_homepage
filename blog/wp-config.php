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
define('DB_NAME', 'cl27-a-wordp-e84');

/** MySQL database username */
define('DB_USER', 'cl27-a-wordp-e84');

/** MySQL database password */
define('DB_PASSWORD', 'w.r!emjEN');

/** MySQL hostname */
define('DB_HOST', 'shareddb1a.hosting.stackcp.net');

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
define('AUTH_KEY',         'xIb/2xK8ep/Ek#!5=(8X)4DoRnI9Jj7493K/l4VI_q2)UGrsl65KcWb/V^ofxQ3x');
define('SECURE_AUTH_KEY',  'ko!lbO+KEaQ^=GQ8G#TgZR8UF)-/Y#7qr3JrPBoKDd(KMv(_Kjo6CkZTHpr)8GoR');
define('LOGGED_IN_KEY',    '#mhGQ/bBRriQJ0NLZf2E3irdBPwCHf!+A6UPMJMu_c)dCTTxYsPVl+w!69UwTgNh');
define('NONCE_KEY',        'D)Kp2OHeQXe^0/2O6#WAkiJn-uG8GgQb-(r!tlCzM!-aPIKToeeYkf5#mVlzxHO-');
define('AUTH_SALT',        '_ZaFPrUAcPVNa_bb8yh5k4yWG2Xknm7pIAEfi6vcOeicZZIVkTBLFQuZ6D5pfCtj');
define('SECURE_AUTH_SALT', 'zTf+7!4bxtx=rP3kNFO0TFYgDbn61FK9v^FDmiSjXH6uR64TVS-RD16e9P1+0Ikm');
define('LOGGED_IN_SALT',   'Z!NuCeXH#aACE!mJyy^F3KdGfrH+A1By3dbCrh2+XI5^A/PPFU/R=cJIEyNUts06');
define('NONCE_SALT',       'uA4i8rN=Oda2wDAADgk^6^n9x)mSWile7+mUgA5TOhbWYS^ZNip=+P4xm9ILGOro');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

