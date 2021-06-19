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
define('DB_NAME', 'db130481_wp');

/** MySQL database username */
define('DB_USER', '1clk_wp_qnwBB6X');

/** MySQL database password */
define('DB_PASSWORD', '3tSx8kn7');

/** MySQL hostname */
define('DB_HOST', $_ENV{'DATABASE_SERVER'});

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
define('AUTH_KEY',         'ZMI7TAZJ Xmzr6XF6 rBzdTVbP YkGdEdoL upAuqhNK');
define('SECURE_AUTH_KEY',  'FuBO5Efe yupSq7vE 3HvdMHLR jsvcxCWL vhu4NEoY');
define('LOGGED_IN_KEY',    'cenD6QpH rLbYtXLP vYwqOTwa AqhynFDz e8XHsZrk');
define('NONCE_KEY',        'mxjQb73R BvfkfIG5 mR47e3yr bOWM7Ggk Vo4iHbDs');
define('AUTH_SALT',        'IMWbxjdW GkZnNFs2 n5ix2mhF dgdXQZAi IGXE66H1');
define('SECURE_AUTH_SALT', 'x1ricyAa SQyyFzWD M2ZmJ6RE m5fCsVZ5 SvlaBDg8');
define('LOGGED_IN_SALT',   'sBKl5kxA M3oIhUVU PTVatL3Y kn6n2HJt xq4Kumlj');
define('NONCE_SALT',       'cjBwLVdh gLJxPBam maSCDEOg ef1vtaNF EJ7Bu1wO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
