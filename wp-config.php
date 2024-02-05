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
define( 'DB_NAME', 'cszdemmy_tpp' );

/** Database username */
define( 'DB_USER', 'cszdemmy_tpp' );

/** Database password */
define( 'DB_PASSWORD', 'cszdemmy_tpp' );

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
define( 'AUTH_KEY',         'C$XkKc=Y~8e_HxA0z~70etDpb0OJ?!A^Qi6m=K5K^719Zognw(}}6 Ov0yILv6bg' );
define( 'SECURE_AUTH_KEY',  ')7(yRES rOZVp*}?UgO<s3YKQR-G7}6.&DBt -(kWLq^]6k0{-ilE?D T,,BQ,on' );
define( 'LOGGED_IN_KEY',    '5)`,q>9 6THcq+y0TwyxnJtdZMVYI^F84o:le[g! T.v3{Ks8e3f2r/zu2XO;`(Y' );
define( 'NONCE_KEY',        '29gbneewxP:[5@i.l2|3QGzzCwJZ.omJMr8RAsNbBXG?ldX%41k|Lw(zn><Qbv[|' );
define( 'AUTH_SALT',        '_..!AOtU[$egKE-<e+$ihO+*}&la7S_,bvBN#aZOBkvIiwTCC#3b!an|)DOIf66V' );
define( 'SECURE_AUTH_SALT', ',Sl3p%{Xicwx@l3)HiCp$i&>v;B=;Du?rl;Jg;vBPTB*H5a^YdW*`,Vl+[[NriWh' );
define( 'LOGGED_IN_SALT',   'cnCs:l%ozqIsI-LIw)S1~>]MqG8=*+E#1;&!Na[YE)hc[~8-aACWyg.T |H@Bb?3' );
define( 'NONCE_SALT',       ' lXE!qW?eFsW7,:K>G(6xBYT km2AKWT9ZR_>?t|Z<)Z~kIJoX{aJ{3QM35^E[G9' );

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
