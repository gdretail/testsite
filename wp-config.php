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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'kO4vU&xk&L,gei5g_k_6Mmk[jy7w[*yuG(W]+0$$]z[$:`xKe9>47.SVdKe.uaZ;' );
define( 'SECURE_AUTH_KEY',  'gqdu>_yU=K[e^Vpzj+B.l.3@3At|<<{#u3Y/PP~rP U%-rA(@[?y:m_o:0g$Na2`' );
define( 'LOGGED_IN_KEY',    'lT@IIo~tWl2A)|nWG*!2uGT>ZL>_}@&mrG7W<7#v/d+JU&%q=0:Zv,erM)3m/x8w' );
define( 'NONCE_KEY',        '8(zx1(bA|84Q[5wx;:$,V~ZhXUM/5X/5m(@X?|]5q|tB.X;vE,,@.xcj}5HnV+i]' );
define( 'AUTH_SALT',        'Ox:>ep{}0;S%VW8@5Pq02mU(sW/.Meh](,9)gcUV2Th4h;TDmQ]bfq)reU:<q*N4' );
define( 'SECURE_AUTH_SALT', 'BLipot+P;1sP?NGBh Z<dsm,Pu[S^z=L4UO0+=efkuvU&v:l7Vf=|Gi]evv{B7yU' );
define( 'LOGGED_IN_SALT',   'z8AqW1V^:-T#j3C <I,gT]x7i>poW?I&oetwbbo5=ni7`uPb>?36TGOwC@##GH;S' );
define( 'NONCE_SALT',       'C#c;f%T-pmEze]fuCHSj|6e*CC^?&o]~<wvE`ZtLtrAqYPmr769y;(fP`FX!:!*z' );

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
