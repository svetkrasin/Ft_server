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
define( 'DB_NAME', 'wpsql' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define('AUTH_KEY',         '.3%%`W_8WM-QD{rWx.++i:^5kU9Rhb2jLn#W?iR+w[9HmB]LNE#Lug!D-@gIncxx');
define('SECURE_AUTH_KEY',  '-9`>AfZ-d)=3RsFJ,nIuq>`-mfPcH^(1 olU13w1/`|2hc#N98Z32(. /nDKdd0B');
define('LOGGED_IN_KEY',    'WnT1R-RKBO?wsGf&tM&f71cdWdBf[dShaLS[o|vVP&-RLBszm_H}U-xt}]3m.!1x');
define('NONCE_KEY',        '};7>tAX&4m3w=X6Or4iJ@biY,+?l>O41$9M?iO6d|q[wCG8{(HpyNx|jrt%-0s9l');
define('AUTH_SALT',        'l1htR%5aX:BcpihuD1Zu Rbf,5{vk`9DQXCf)`JwT`p uzZW Z|EM:E<CX9fDT~,');
define('SECURE_AUTH_SALT', 'W(PK|~2#KF-:]G5]@>s+]azJu.ek6>v{_REgz.0 VDJa@j<I/eo5MBg!M6yT)S,l');
define('LOGGED_IN_SALT',   'l7N!sHX+q898FALAPjTU,ZX:0BBx+pO7>464jf2uLy5uYa3eG_}GbV`><OvK(sd7');
define('NONCE_SALT',       '&.Wk}%0>;eT#m^ M9Fw+R| IdRCW:8d$z/ZBsJit*mZ?*iWdK~w|,/Wgs*QsS|n]');

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
