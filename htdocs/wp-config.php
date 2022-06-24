<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_32023599_w166' );

/** Database username */
define( 'DB_USER', '32023599_1' );

/** Database password */
define( 'DB_PASSWORD', 'a(p2U25s]S' );

/** Database hostname */
define( 'DB_HOST', 'sql107.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zqcgtdodns5trg3gqeqol4zwfyi7rp4bgmrbxxqka4mszbnyjmhx1esy6xqb8trb' );
define( 'SECURE_AUTH_KEY',  '2zf7izrsujcd7kclq6mftak8hyomtqhrsriim3mh0dmr58mmmuqfed50zipuzmsp' );
define( 'LOGGED_IN_KEY',    'mxo0ufezb99h7kd7gmjasxhtons9nmvxhux3lrsgji5pvmfxwl8msdmaruzz8dgp' );
define( 'NONCE_KEY',        'sfhak2so1rdkxe9tel21torsqsewzlz4fjwujzrssqv93ugzeujftrihjyjftxcj' );
define( 'AUTH_SALT',        'vb8zv5rwigheppsjieo9dc6rved8oswv7rwmmcv54mta7ckl54zkrrt7vcedcurp' );
define( 'SECURE_AUTH_SALT', 'yknhjhs3owjrkpx6nzoq3aiwgdqanuzzijvksr7iohpn7qq2pzs4gkf6hr9dtsbh' );
define( 'LOGGED_IN_SALT',   '0yaoasqhgnleb8gsbjeid2e876i9ykajvy2xy4kxhnlkdwn9gfqnbpbcljlztcmj' );
define( 'NONCE_SALT',       'kqxwwx2aulfcb1t2eqib59ayyk3ftykp2jtp9rzfqffkpp25pmvhqxvta6vzlzwq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpey_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
