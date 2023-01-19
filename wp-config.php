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
define( 'DB_NAME', 'rfinance_db' );

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
define( 'AUTH_KEY',         '?#4}OW~Uh0]-hOg]OUxjGe[HU(bC0n<OA9]=.L1FWfE~bK0c)s&,W|+,Lj{y@1l0' );
define( 'SECURE_AUTH_KEY',  'fgCe`kjLz8w0P`o>`!3aZ*|bzOu?aylnlMHY=9oXS`o>9&Ez5iqepu#t|JDzi3VI' );
define( 'LOGGED_IN_KEY',    'M`V9560*3y, h! <ag^%5@pM-?Ce6X7!r=mt_=(BnnN>?tEz&Djguu<hP</V8Q-D' );
define( 'NONCE_KEY',        'clj94<fD%ur=[~bBD8-GLE]E<=y@,;2dNg=,vo?664:#6YK`jivy1,/Ot.ent~%2' );
define( 'AUTH_SALT',        ']2>ew}n^76XLlAy3EUj[@CxSLU^1on*:aV(zLb5$=+3`v3@B!=_PmoYeSUT(K1A(' );
define( 'SECURE_AUTH_SALT', '_?KZErKATK#][WryiV_|Bf:ajy4G9bw*+fq4.p]Y01f{(lg)w`#%`;U6r0mX7[Vq' );
define( 'LOGGED_IN_SALT',   '-F1.1j<Yspoinm@C .{Fm?[~6{cRy@#trJ4sQroCGLX$gJ4e?*jMc?BTb^<nTh`/' );
define( 'NONCE_SALT',       'Lip&E3v[<({khkFw?9O?4IC:% C4 A_oZ867l9%w`-O4J/BfHffI;Vbw.nQoM.W5' );

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
