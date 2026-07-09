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
define( 'DB_NAME', 'analytique' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress123' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'Bk_Z0UA{iabFy0Aqr;r}R&kK8gQ,_K.@I) $gJgUbGV@S*00cL-fp50W&rm8tlEC' );
define( 'SECURE_AUTH_KEY',  '8.<3|zpx@M<m;-E}1?%i&Z,uPGDD[A.0+qa=#I+@^k4]R>j0h[:AO^| ^Elz-bpY' );
define( 'LOGGED_IN_KEY',    'N[)cgJSj@ifPsjM9^rk`9HRZ1joTjyn[t{.BktKBs~e!*bkiN/R;NA8!];xbPo|h' );
define( 'NONCE_KEY',        '%Uy%IM1K),h8*y]]2=DgK0_Jt&N_cr{>d#cMiylr>9bZR7iprY$FUH0Z]7ea?o,Y' );
define( 'AUTH_SALT',        '4FW/H*5*T>0`v${v64:()Pf4L1efbk_``-y(6m~={+-,68w_Y#,uw!jby67|h?{%' );
define( 'SECURE_AUTH_SALT', 'QODYG-D??DXnF7L#oU) J]yJSC2@p5V^6OT;],GkO(4G./6>h,A)r>~$VGG2Xp*}' );
define( 'LOGGED_IN_SALT',   '.xF:akL}olFy(gg|[V5w75*kLvF.Jj8=*Gmra.&:;c5$68>Pe]E2+N** 6*5.gC^' );
define( 'NONCE_SALT',       'n)MyXQcO8D?8_L*xH+EtNq).r/1.[eH9sUIGl6p]]ZYCioBg&J6j6]#YI;Gjn-8h' );

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
