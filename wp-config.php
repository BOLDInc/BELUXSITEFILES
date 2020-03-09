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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i3733683_wp6' );

/** MySQL database username */
define( 'DB_USER', 'i3733683_wp6' );

/** MySQL database password */
define( 'DB_PASSWORD', 'G.dV7aGngyeZo60ZjNi89' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '4rBEjhuUdx0D5AkJXWklFbPhyREw5QpcXyuzPPGElbJHxtwx30ZjjtcR2SlfkiMB');
define('SECURE_AUTH_KEY',  'cR15flcfKSfQYtqroQiUiyqdREWYMwsxua3qRhMzscv6Y4XgPkChoWLbItvnea6y');
define('LOGGED_IN_KEY',    'JlZR0798Ffl1k6jU1dwLiH1lSNEo37CMseeQvvAn6K3Q5oNlnno2CNAz2Jfm1GbW');
define('NONCE_KEY',        'oD5Sn76ibZ90vmBTo6Vx7yLUVmK3xevxFBRb26ugDZK6DV3bbpeGutqZzqe1YuJD');
define('AUTH_SALT',        'fD6zxIXnh5dnH6f2QuXKpdkB2EnEnwdwFTUjeWENQgpJe2Q8WxnugN53HsZ1yFuq');
define('SECURE_AUTH_SALT', 'cvnjVk1r0AmhQpqcVdVCact1HyssDXiRmAbIQTIj4d7CxVs7tL5uHno2K9W3Mddr');
define('LOGGED_IN_SALT',   '6xIZn10HpimmpEBrZ5D2AL8SIZNeUpm42uuVZ2yC1v22Dccz0ddVAo1Ff134UjZ5');
define('NONCE_SALT',       'cOZuwjTzNBdEmMZ7gxaGU670UV650zlXPGMThGYpMyaBlC25fm0Hn4KspPcrBLe3');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
