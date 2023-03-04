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
define( 'DB_NAME', 'landing-wp-bs' );

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
define( 'AUTH_KEY',         'O@U~LtA76h_;+cuZ] [G5P=h8Xe;0Ul>[%SyX)5=}@dgY^Mf8O<AllhgEY~qz]1 ' );
define( 'SECURE_AUTH_KEY',  'i2T:2&BeZdm}7q+wakvu?_Z-*zxSuGj(dw8MpJw!Bu^H&`!Rp!;,bFo^@*=UwH=f' );
define( 'LOGGED_IN_KEY',    'MW|+EJ=Nks#eAgK9gR2>;~PqQ^{*cQSy!01GQgGvRr@+N.yRAniYoRMc!Zw?Qank' );
define( 'NONCE_KEY',        'A5KrkDKc07=33Ufh|>hBs56=0}IbI+BMaYt`]Mu,J`>8F~v3mUQTPNoP}rQDWbv/' );
define( 'AUTH_SALT',        'oe5/#xB-<Kt/X`}3(1$z`^u?_S6(*,BU,u(hOT_U;HJWO$,hz[]V1LQbttOFK,mn' );
define( 'SECURE_AUTH_SALT', ';)OGGdOEH,;(;$ c{/>`TGZ^Bp/1PPx6oNFLRWR<E.R@-!/k Np#pG_^|TdMmn]j' );
define( 'LOGGED_IN_SALT',   '$*9U}N#|q5m`3quy!Go_^r-`O&4p^L7Hs1OSB_Tk.pyDyi4@n;^`pngq6Kc-n})2' );
define( 'NONCE_SALT',       'm_$kh/3hU/|!GSb)k)d{GD:O62Ir2^,e!jKz1<@;L{r+Z&qDxF{#xZV`wDVBZ*=F' );

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
