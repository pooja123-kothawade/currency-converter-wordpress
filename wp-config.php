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
define( 'DB_NAME', 'currency-converter' );

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
define( 'AUTH_KEY',         ']Hi[yZ~&GX6a<V.1~&f[k[:PO]8rlOM<j}ieJU|V.!htEyn>3[v_&|t}*!Hgo_/%' );
define( 'SECURE_AUTH_KEY',  'RzfUz}fD#n{MmT%`COxU)Oe8L))#? *q.g<|Wis8TG/m/#eo<`=SH)n?RH_L*&I}' );
define( 'LOGGED_IN_KEY',    'fLDzb-pg#P#tv6IDyF{ZP%EbOs-Ow#AXLs$)NaYuPykPT!}viX7_,JP6>M#@gm=;' );
define( 'NONCE_KEY',        'DzF]N}jl&|3Wz/&,A3Wd}v<l)y.&USM^qPtrrl~)Orr#,fJTLMM~>Fm(+E2Q$oku' );
define( 'AUTH_SALT',        '[F+cq*ELeZUgUxEhUh37&-v{}:jszPMW!.Gu}|3yHATBmD{D&SY( 1@W*._zhnR)' );
define( 'SECURE_AUTH_SALT', '|6C>zBAG@,*BTzf?*C5@*q8KW^|XM{*:m$p9P+~{P(0Ppv7ZI0|2ShKlS4C4^J`m' );
define( 'LOGGED_IN_SALT',   'OIZoh#K~vrP|G0P,KM(3|.!VdwX]oA7Mh8Ib[|9u-%r3-LGZ2<M%[KDsVH?s7,a#' );
define( 'NONCE_SALT',       'Rc<}]<6c`Fa3n~vK/bMDgXIF9:2P1Mq}-j]qdRAl4NN|~4P)lWCV<V&P^j<:R(xX' );

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
