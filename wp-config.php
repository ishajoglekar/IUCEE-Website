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
define( 'DB_NAME', 'iucee' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~.O],: fT>]$aL)IG^{8e)UdOyuw(2?qiwG+!VSZk}K 3aK;bJI:q tlC#;;Ir7]' );
define( 'SECURE_AUTH_KEY',  '-ilc?F9~1d_LdaP)b!ClxdYf]rPTn(v:&/Ifdo_kl]xVtkzgL.Upshm_OK6)`7K7' );
define( 'LOGGED_IN_KEY',    'k#TW,Ix| oAv16A46~<X:oO`ACT:[w(@s=)k${<eKXC(~rJVWg;&nuxG1dk1G<%)' );
define( 'NONCE_KEY',        'b(YG5L)Z}Eqx{mK`l<jRlO3H,@y^Td##^ZVIKN%).A$;?0},IfP#U+ju.ITD:hha' );
define( 'AUTH_SALT',        'M30%aN{9eAqms9%u?IGI+@Jgz@vk9s/`b><M1^TUA,|!tj))}xO>Esw!NW*qUvHm' );
define( 'SECURE_AUTH_SALT', 'Yo%wX}:In*dC~7<9m8zI0IgLI#}_oV.Q_/BNEDuH%2;G;06#aKzi$:||:BR>-xbo' );
define( 'LOGGED_IN_SALT',   'Nk4lh(Nk|.QgmG KCVXrZ`w~$(9tlPyS6`4.4#]0MbZ$q3%2K&F/H.%,aA~IVdnA' );
define( 'NONCE_SALT',       'B}yx$54O-Q1vKkT?};TN<tg29@+~1rw:g]i1B*]c.6m(74b^OuHd~%nbU![wsxzk' );

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
