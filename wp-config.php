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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'idea');

/** MySQL database username */
define('DB_USER', 'idea');

/** MySQL database password */
define('DB_PASSWORD', 'Foxier7ucieV');

/** MySQL hostname */
define('DB_HOST', 'nuweb37db.neu.edu');

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
define('AUTH_KEY',         'V*rs:D]Sm[bOIUw$C{COb 41fsnMm]VOT9 ~+1-4s|jTC~r/IYnyZ~>8>CR;A$27');
define('SECURE_AUTH_KEY',  'W0d~98?Dx^&$:Y#Cx9RRK|Ic|k0{K|<H2l7|BxaC5G#eP}|X~-|Fwda0|&U`XpJn');
define('LOGGED_IN_KEY',    'O>@Ai_-}Mi/l=ECh 3scbo*geyB7f*y)+Y_i$F)&d@8|n<aY-)Et=^&D)/@9EsY+');
define('NONCE_KEY',        'rK*FFS!OHR03`qPRU?6+hot)#rPUmyt21)E[Gm=+>b]w]9^l<a`HDA1B%VzS6hQU');
define('AUTH_SALT',        '!G[fq[vLi.&[A6Z]m+mMYchE{N)1Vib}Sfuc~k5H2bg?t7V_|Mo.~_ssk&[AfRt}');
define('SECURE_AUTH_SALT', '2|o5^4zJoB$x#l||vZ(12&~JPgy@9EynoCEXH(8u|l5L.|R=xd8h|KYLzPy v7lC');
define('LOGGED_IN_SALT',   'By4-a~FQH+.vCIN2^>Ht&1b#4?G%`KH]9 iH| n^!FPMgQ`<7o>K-z]^Q_M&O*~)');
define('NONCE_SALT',       '~|bIBC=#ZOCs]-1PVL_`9}]7E-Bv{}*(@j+GWZ4_@<~1r`g`ZF:3W^.oLj]<EAMs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'idea_17_wp_';

// Root PW: 0r4*9x%@&2pmoQKbq1

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

// define('WP_DEBUG', true);
// $_SERVER["HTTPS"] = "on";
// define('WP_SITEURL', 'https://www.northeastern.edu/idea/idea-new');
// define('WP_HOME', 'https://www.northeastern.edu/idea/idea-new');
// define('WP_HOME','https://www.northeastern.edu/idea/idea-new/');
// define( 'WP_SITEURL', 'https://www.northeastern.edu/idea/idea-new/' );
// 
// define('WP_HOME','http://idea-dev.us-east-1.elasticbeanstalk.com/idea');
// define( 'WP_SITEURL', 'http://idea-dev.us-east-1.elasticbeanstalk.com/idea' );
// 
// define('WP_HOME','http://localhost/idea');
// define( 'WP_SITEURL', 'http://localhost/idea' );

define('FORCE_SSL_LOGIN', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');