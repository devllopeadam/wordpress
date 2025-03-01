<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce_pre' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'adam' );

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
define( 'AUTH_KEY',         'ZlHw0/A!tIOrh)4QN6EFBA(d:8VRm`)P/Brik#bm.gDTp -oq~TC`-PrNM?.mo#p' );
define( 'SECURE_AUTH_KEY',  'GEBC>(?8bZcyB.{[P2 `WW?;,&ceerO.._YWrMr/R]0<vYeMtgi}7$(OT!Bb;}LQ' );
define( 'LOGGED_IN_KEY',    '_Z*aj!:>Li_=ev8ocu,C8:e)V5ch&xfLCjekS}PFoB] ~NYC<)yq>aRQ8$`/=ECP' );
define( 'NONCE_KEY',        'H@H~RE*L3 0dsb8J(X}73XaPMmyv;ffE-jW)bA~)&r)lfvpIS^`7^YiqOH^[[Lm/' );
define( 'AUTH_SALT',        'y^}O,>zBbDf#SM-i/GC<t;KF#qbL,5N=fQp ~o3q}xY#4<jwa6e_L$Rn$B@LVRIE' );
define( 'SECURE_AUTH_SALT', ')k):T}Z?-~J}t#48N#gj*hQGCNd]bS:IY[RG^FX.g+d-l/R/Qwlzg_6LaU(Eh$Ii' );
define( 'LOGGED_IN_SALT',   'cp.&Fq8TkJ`f!!.V[nV0IIuxaeo^wb{a#2)n~JuCN}BS }N7AGt#)dhnqGpa/eKV' );
define( 'NONCE_SALT',       'Q[YS h,l9bO/I&+yM2v8$9;4^1B#BcOaj2q<zNH~wnUWOsJz6Y2*8Hj%WC`ndA<6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
