<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'P2t2Cc+y2t8Fk10YUByLp3iI5-0Zj5]&7*]bCB2N1Mk6-wL)u8ab+@;m[~xcQMGv');
define('SECURE_AUTH_KEY', 'fnx79Ws(o2-9@Xkr6tcHvMw3J7I%]x38L1o)0V6KAn5214];dU9(A#ZQ1WJ128rV');
define('LOGGED_IN_KEY', ';y54Rj;E2I19w+%A598Rk91xiNG2:sQig-()+&Y)/@rCYff0-Y9/7J-W-3j~+;b|');
define('NONCE_KEY', 'A_/Pzs9H+bbN9NOx4[3J(_I5tfb011q-w(U[uuZ9npeZ3*s#Lg-B1xeilYJ1KjGS');
define('AUTH_SALT', 'QW_3[#x97DuvW:!L2*z1glm[O1qm+g29(nk/3W_FQq|;qf1#db#+2|nQ9~@|q]8E');
define('SECURE_AUTH_SALT', '5qO5bLGNv697c#4[64!yZHlV|@~Hozo8Q:9x50&pw|8w2/K|3%GP*#CnpY90C6[8');
define('LOGGED_IN_SALT', 'qMUK9~7Hg9]0e@0n10XO:7p5fK-;zGgy9rP%FT&x]hjw4+X/CO5Mv9+[o*&6-L:3');
define('NONCE_SALT', 'h3CNk9)1nzr0m~(/h9!wDI63AoSnFIs[sW#9HB9&ISzZ&%~1u-!k6@!8)y3rBgI[');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ukrn_';


define('WP_ALLOW_MULTISITE', true);

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
