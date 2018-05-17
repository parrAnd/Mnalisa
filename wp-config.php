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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mnalisa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^/tp.kR8GWj+Q%KeJkXi^[a+m7[e:lJm/>&/aiuzi1:,o0 *gH,/4qm= 6umBW)J');
define('SECURE_AUTH_KEY',  'qfrcd[~!@W@I[@d}M@YS(CT0;nymKQP*e~M[XDR7,c.0BX:VcF&pz^-?kO2a^7k)');
define('LOGGED_IN_KEY',    'TPj<ZMA_(zd&U+)^ r^r6RN!C#C1<?yc=a+yFM+T+#d?.xS*d.)(Sg(Bk6/ayF>*');
define('NONCE_KEY',        '/NOVKh_l!T/;x&vdJrk)>pp.@IV_5rlWM/.lNt0B0nq0/+`e~p(%<#PfN(m!(f~|');
define('AUTH_SALT',        'z-43i;Wyh!u(`My/c f?25-9TSN2[GG4D)K$eiGLL.nt,MOGnOH@$qz5)JTLmv+/');
define('SECURE_AUTH_SALT', 'Wy^>[1`DEZam1Mv~a!N.`)5w@W,*:%bdWK!bTT9_YX@)y_p6W/vcMTEaNUV%p64U');
define('LOGGED_IN_SALT',   '@<Biyz19?v$6#o)0s5soUY<AvN-[H(=99kcw3DdOtX6,/.CMx~ULcm}3BCcGkY^(');
define('NONCE_SALT',       'Yogz3my*%B^^EEn^GV}o;T=6;i$6;UzxgaTx]bTpxP.TlBa83{?9yD*Cp(6a^RvP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
