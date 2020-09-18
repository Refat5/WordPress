<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'refat10' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WordPress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{[3)8-Yr@r$I5IiCOLU?OG~cOaF()Y~&PvJP=3f9sG6u>m/b3-kH?TP;,A-|h.JW' );
define( 'SECURE_AUTH_KEY',  '.%)_T`ywBB]O?lrcv3?,4{i~ArY:@OvB7!nx-zsMyRH55|&pMi%x4,,HRa)! :Y.' );
define( 'LOGGED_IN_KEY',    '*gb`*_/3F=QK2 >O}Tj(^I:?G?Uge{/=ko/>3|0nBeP0nJF&fUh|*OibtmRov5!q' );
define( 'NONCE_KEY',        'U)6]rA_XClGEi! PZZiA})bE=Z>0%K?5ch`*sx P^u-A#;mQtlga&OYvO;xiQ6z_' );
define( 'AUTH_SALT',        '}f6)jPNH6,8?A@F/JJ5D[uge76QXTmT{cs-bW(aXnTGUr0rJ,nEXBk]rfnS@Db9#' );
define( 'SECURE_AUTH_SALT', '3@d#*Fi<unFYy{!8;P DQ7uY,s{j7R{% ltuN5/i3m.H9kwhi`E`;lSkzCEBBt%?' );
define( 'LOGGED_IN_SALT',   ']+bqtR!7#oQNw[0~:BQ-Akx`9ME_?PX57 %k?Px7;n1Ct$k.$&4sQMRp@_~|l9iR' );
define( 'NONCE_SALT',       '}BIiyeQzyD7]K <Q4XTj5:crN5iA[_aet5S7WCnzz]Y3!nB:n.f5b#nKqCVV@lEB' );
define('FS_METHOD', 'direct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
