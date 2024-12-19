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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CsQ{AR?,:FLr%%jJtHfwZD7YsX.<e&6*[f8Lu0E;K+>gh+s~FXNl.FZ `<<Kh3_{' );
define( 'SECURE_AUTH_KEY',  'C9N9k!_;tJkMi&0i*Mz ^/63rlHCJ:]USQd0$(zi7VafhVd+dG,X<1TBAhO43C7A' );
define( 'LOGGED_IN_KEY',    '^|Qg$5|>Rn3qOX{H oaU-2CyXu9So>!*60o7*tp;p_sqJ4kyvVo/Y%= t}3lX&P!' );
define( 'NONCE_KEY',        'akxo{WUpb:Ime|&53#Og6G,NO,&Pw%9I<tnA/BfG?>%WZYa5bu5M!H4fOmW5<0!*' );
define( 'AUTH_SALT',        '/Ih<Z2f4mIpVE>nVyOA^:5HmU%]+?5Wo_02:EjghhrNNRZL+J^ar>U6n,gfFda&W' );
define( 'SECURE_AUTH_SALT', 'M@1/`Z(hXNZOE0x$3jbf4pF6dw[W$Q{xvk L`,-O6{s ^}Hp-ih0*}f=4&C9eVcL' );
define( 'LOGGED_IN_SALT',   'MiZ$+],No@3Q>FkQH8RauBwpw}C2`u^&|Y|C,2lXtoD~jxPhX+NM!0jQ`eUyd6k)' );
define( 'NONCE_SALT',       'pUR&st{u3KoZ!`eDAhAW2eh<B[4o=qWc7pi2B:lqt-XGt9l,4;-uEtqEjMLxqDI6' );

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
