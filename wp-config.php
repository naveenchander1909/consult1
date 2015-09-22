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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'PEgD}a$sjL~1PjDV GCpvV[@E2Dxcd%d@R^V3I@7DJ+wy nv=v5nXH2:-X]w[?jd');
define('SECURE_AUTH_KEY',  '^dBY?|;[n`p]:dkD/g?|a}6..^BEz`qTrtlu0F^L3CpXGuF|lL-Dr|LExe$N7j8l');
define('LOGGED_IN_KEY',    '@Q0;_?S>5:s[ew]dp+4Xq6+#-Y$Ecq~_L]M6fe1$E`4|p<A-t3aPMs.r$8qQ%J:%');
define('NONCE_KEY',        ':a`qXF2dFQ%Essqu%fbr2q{ [Fxpjd1%se,AP{AW5~$j5k$@%~x|^^psg]{_-4;_');
define('AUTH_SALT',        '4n!_k_1uHnU#7-WOS2YAFf%Hv8ckz*qb6#O~4eXNS>o%PD=u~i~,0_n,h$y/Y@E*');
define('SECURE_AUTH_SALT', 'z~.D{afn]PZqFN4@GNy3ZKZN?t*2rw*u;2DfGlV?FL:CvODoQk J?5mpD]}vop5G');
define('LOGGED_IN_SALT',   'K;.nMY`1oUzYi)mC6|[F}$H^{hyBWb.98Fse0kbxn.zgtp%| y_c;Cf=dIm[tmP|');
define('NONCE_SALT',       '}2%)`YXuzUnv=<r#^?~38cwCmC!99aMXyF_h~<-x(!TLTs#<q$17kGD!t[HtP[jB');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
