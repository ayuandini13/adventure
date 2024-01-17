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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'adventure' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Qaw@s$IVZz3_{@mBDsGPLP1lU6a/umt|};Z@}QyU!|z$K4%*5kT.T8)[@_=eP/+k' );
define( 'SECURE_AUTH_KEY',  'Xawx~x){T.DU`Bl|Y2<gX>&=yV6p1DODRWUlVtAlpnbU?G4 Qmuzcm939r]Fj[=B' );
define( 'LOGGED_IN_KEY',    '}k;{+fhdrqu32$NJia>x5-aiWU!y>`YO#xyM.ou;rUy&2>ZA!LhbYkUA$7Z:^pG9' );
define( 'NONCE_KEY',        'c>P&*b!_=jyU1yVrz^g~[I6q<.r!qAD*]<<q5([LDF]e<upe;0huSbK43<lE{iae' );
define( 'AUTH_SALT',        ' c}A&&*K @4sKW_DG#X};_8Bif(P@_OuD?b{7nq[OBM<|lmtRcG/~<J]y%)Rwf<+' );
define( 'SECURE_AUTH_SALT', ',$K5 G7V9mkGB0{5.LK[t/X)*h0:yfL:|76dMy~[yu/=7(BH[ZDH_S6?r* 7Gcg~' );
define( 'LOGGED_IN_SALT',   '<7K/oL-@GE;<!H8:P[7u!7bSN6Pg<i1?!&Gj/DD2q8tc@3hTgP*A]F$^CkUGY&F]' );
define( 'NONCE_SALT',       '|/3gjQoacK*yJ?!zQwF),Jh=81;G]Ay~Ib$[[+~MX~B:5b]>VJ^wj/YK8(%6/V;<' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
