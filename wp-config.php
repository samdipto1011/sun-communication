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
define( 'DB_NAME', 'sun-communication_db' );

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
define( 'AUTH_KEY',         '>ZgN0db:oBs*7gjxv4uf}vj~YGtdt;)[df)dt<s{=UhKzmLF?ow  l[) LeeKxZQ' );
define( 'SECURE_AUTH_KEY',  'f9Q+6%ll*v@Z^) !B]e`{Gv9363}7NAy539P(8tis[DDn7(b;OjDL5q$?=th0eV?' );
define( 'LOGGED_IN_KEY',    'C64kG@|&h*@)Jmy{@N5nn0hBkg]I$EIoEc{%UjEv]0u78yZT+`|?,edN/[XE7My!' );
define( 'NONCE_KEY',        'KB+ouiiwepYmPP.5$#?OL{m_xcZGO@%e_Nj06?oieah~tJtOizoqpwQwiH/R.g@@' );
define( 'AUTH_SALT',        '.8aK`Yl-c?foH/t.BC1} UYZiU[V(&3y/`#7a_;S:2@L0G&Oi>0TcQ9D~6 _;_dv' );
define( 'SECURE_AUTH_SALT', ';OX1#wFKZhQ:KoMi}7~Z6,u?>SQw3z5mm4|DH+qRsryB4Xwr;GX1AbW]_nxQ4v78' );
define( 'LOGGED_IN_SALT',   '*cvA+k?,0{k0by_!K>ItlaO_Q;B@Y}E;jOk;`@[4prr(tNUWZ1s(>_(do`o&<C2.' );
define( 'NONCE_SALT',       '7|9[[83)=dv)v#(he;;eKdVSPxBN8fb<%NY*&;me>}Q:YSvu%T=~Ko#ercJ{ 0xD' );

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
