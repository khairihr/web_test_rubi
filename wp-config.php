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
define( 'DB_NAME', 'wp_ruby' );

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
define( 'AUTH_KEY',         'tnh](k_<EluSS);XpG*D&4$X}?T:2tN,7Dk`XFTf(A 2xKafwiLkZsvd  /[U^l4' );
define( 'SECURE_AUTH_KEY',  '![Q|~HzAydg(@Oti0M6`Eut04xD6I-4d1&7g[,!Dz}HQ:4I]_>Y@(oMbPIMNq2HF' );
define( 'LOGGED_IN_KEY',    'l;j9!Z53z%17S>EZI !9[%Z6(c]!9`7kMS>XYW[.,#+B$D:1Sl7B[Acz}jU2*m83' );
define( 'NONCE_KEY',        '(*dUPlqZzveJ9?9gnI&W)m@O*7L _H$oFt1WUeYWT9LG >NRyc(}aOt5T:pWz]:_' );
define( 'AUTH_SALT',        'G_%@ c*3[!#+4-IO(}6=x^R0z-K~CEu(x]M=@?Td-//iM{E$/eDv]CTRLB>xeB^O' );
define( 'SECURE_AUTH_SALT', ':+= 3KxxS`zExaWER4_W6Hx-8,S3C{PEp)brg+U.,I %JgZVbC@@5Hy`V>5yx/__' );
define( 'LOGGED_IN_SALT',   'Hv,E&JTNsh:YW9lmR7y7C<UDYo3)0mISH,_jmcNnzfb6F[:(i1mm0ugSQ2M`F{L1' );
define( 'NONCE_SALT',       'ICgEpOLk0q+CkcotrzV60,Bcw5S,(_xRjuD/&[1Qa1_D6BTW2EQjQ?h2t@:l=ds?' );

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
