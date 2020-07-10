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
define( 'DB_NAME', 'homework4' );

/** MySQL database username */
define( 'DB_USER', 'jawanalhulail' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Malakjawan12' );

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
define( 'AUTH_KEY',         'IT. vD5)e#hKNaZhOIbaleM83;j(MK19x]a$}$.Xd,RUMe,i!5JMAisWuRjzr0PK' );
define( 'SECURE_AUTH_KEY',  '@bJ0zO.#Z& KOQ&&<TqY F PbDtggC-YY{.o,d@o!_SNz&!C2=&aA(W;E9 GUBAV' );
define( 'LOGGED_IN_KEY',    'KoYm@!a#FU,?5VZbV9-Tm8Hg`VGW0xl~};XD-(SZZ:=@ER8ml?)jx 7[wyEl6=&d' );
define( 'NONCE_KEY',        'P6cJPPu+%#7?JP(Fi,6>.]AwcTuM&Sibr<|`EF-vm<}j@3DZsAT,i(ds!S*5dIAA' );
define( 'AUTH_SALT',        'vj-KI~JOSJ{q)6p|dqHcZyy:(/R28ln G<(eBXS^p(>zv4B&/S]OBZq1x:G-9?Pf' );
define( 'SECURE_AUTH_SALT', 'c:0*uo_VH=Xqnc]%zm!FL&S]r|xcdb?taRH8mkXHhAP@5m|R/hJmv8]czl{)tx#i' );
define( 'LOGGED_IN_SALT',   'hF$Ce%5yEp`4#58g[ZrBBF+*9*z%dtdX*Ra>.J2+nL>~10Sw<h iZ|Y8 DBx9w`c' );
define( 'NONCE_SALT',       '[h(5W;dN(M_ovTxI(}l+2jY-wfFA_]f/bCfee+c6r|NM1/eV?|~;DKitMB!rc0U/' );

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
