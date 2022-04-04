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
define( 'DB_NAME', 'tmdt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`Y35}.ueG+J7Mbi |VoN]tA<kLDO4bZ$FMk5$S:Ap<E`%hIL5w3x-%N6|ppO?a[Z' );
define( 'SECURE_AUTH_KEY',  '#lEuYq+H>Y@V`5Mm[tr;4oa2`*Ezf42R{8~AcPQ^N?z8)9c>Ugm&>rSi6B4e!wVI' );
define( 'LOGGED_IN_KEY',    '<c%)yNG@#<euke5~WYv;qU|5X3jy.] 3%,_br]$a}`g(*aHr)b@@JK)CY0E%xi.~' );
define( 'NONCE_KEY',        'YK0}|]}5k.DFdV)HwX}6Dpm.ZfV<!^yWNI1ZDDnFpq*>Z``u.Q|0dbRH}4qQ-X/%' );
define( 'AUTH_SALT',        ',4?7c[Q$~OSJ0US94dYPs`Yn|n+EPOeOHaUVlSUg ^!/`U+qT/4?fff7E]`Zng-c' );
define( 'SECURE_AUTH_SALT', '>(2;#>V&NPM$K+rx!Qq=@=Zqf@@/)+=:4p64 {9$v&U7Y/bp/.{xF?g}i+J0xRdc' );
define( 'LOGGED_IN_SALT',   'b&/.gf-Le$@;lwUaKUx)CpJ?R6TzRb_j{OO7GHgpCDSQx%-$ z]//=WH{1s~0_^9' );
define( 'NONCE_SALT',       'pNc9<>>PDIPh6E8cU/})d6klX|sCY_q xd_]Uo[w&@C+Vz#V^]E=`_zNr[![F1y`' );

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