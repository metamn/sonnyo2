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
define('DB_NAME', 'sonnyo');

/** MySQL database username */
define('DB_USER', 'sonnyo');

/** MySQL database password */
define('DB_PASSWORD', 'aKzKfa14zGiEldxz');

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
define('AUTH_KEY',         't;`2?.v.uNg=B,wR:s%K!vy(`T6dzwX0B4&sfv%+=)m.%)v=&Kvv=z4F>3KfA}5N');
define('SECURE_AUTH_KEY',  '-%r.2;]3)z*5bZ)7jfIyzA,^6eSCd$REpV`q^KYBL]M0ReiX<QLkIIa@Odjl$kjC');
define('LOGGED_IN_KEY',    'SK<5+,`:]T1QJ&Qeg>L2HSB]Nn}_^BUmlhEa}42sPDDXcbm=+cF. `gjl6NQX4%t');
define('NONCE_KEY',        'q%@|f}j9/TC~_F!rd(K3ZXuI0vMbf8d#8#6z(VQaiQCuiP[aL2iJfz>pBPcJ:&KE');
define('AUTH_SALT',        'q:a$K^_EN^aSZaj%os3Ds>KU.0OjOGj4bu}#oRbxrKrVPKvBTz$NbN.tMRCh+t!1');
define('SECURE_AUTH_SALT', 'G)=ory.j>C]JVW.A8^{[=n`s3[]P+[HQ9XysGY%(Wp:H>*T$C02y>bo0&F[Ry#uL');
define('LOGGED_IN_SALT',   '!krCoBhy>%g`,>n0=Q[)Bb0&4gj]#ARgZ<SmZH-%~rq(=PJG%kG1cj4/}2F:@s:c');
define('NONCE_SALT',       'sVdH@:>Ro-%DZ&!UgW{]@M8iEA&b=[QBRAJ$]I6id[V]%6C(0</+^s6O*wWY1}4^');

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

