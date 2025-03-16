<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dafktec1_oygnkcw' );

/** Database username */
define( 'DB_USER', 'dafktec1_oygnkcw' );

/** Database password */
define( 'DB_PASSWORD', '4@S53Kpr.F' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'qnpeuofi3a66owky9tbybnw4yvlgq0rbsv4wc5cau5o0pqmvrzmpqnliosyjeyqk' );
define( 'SECURE_AUTH_KEY',  '2ohypotqnfbryz1of2ckgj2awwc4zwupzahrgt7rb217b1ab7ggellnzttqucrxz' );
define( 'LOGGED_IN_KEY',    'ioanenztdwuxk6zczunh154d38zgjqrc74odvzkfs1kl2ihkjdavs07lmt8kznuw' );
define( 'NONCE_KEY',        'e7wdq6wlke1tvpcb8cxedmu1u08pdgfprtrljhcgtwbyqiqh1phdthzlgrtccvk0' );
define( 'AUTH_SALT',        'aplceohravgnm0jofd8k7zcrvsu43ckalljeleetqa7jbusot7sth1xna9ubn5xd' );
define( 'SECURE_AUTH_SALT', 'ppdjbmcan0em7xbpqacjv98wew3nb7e4jqnphrfpgxysaha0fmppymuuftzfo7vp' );
define( 'LOGGED_IN_SALT',   'tjbtimobdlrlakaqlss3qn0swsb6yzi2m1dpd5woiyamjvjbyosmh9p7llx6gbti' );
define( 'NONCE_SALT',       'pyasvex57z8scshxbvs59aazrhsliqxrsp3mukzacsxwjr1p0rcd242jkpvpshio' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hwp';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'MULTISITE', '0' );
define( 'WP_ALLOW_MULTISITE', '0' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
