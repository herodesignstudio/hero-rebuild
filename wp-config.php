<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'herodesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '5Hs)8SqpF*3NyIojfq21{:L!}?r9}r{>-R0_UGkUNm{47HDMi(QH7~wW}6PfawEC');
define('SECURE_AUTH_KEY',  '9BpaoR;nLBTGqwj`WU:@=4]Ft0ZG/Y*rq7N%=( LM+Ut5;q p)C8vo_:YR3%..C;');
define('LOGGED_IN_KEY',    ']`Sz!`y@6@1G5ES.hNzoy!< jcR5LG ]&>u0.^W)7@w d&}W09A/O:`mN6LpO{5n');
define('NONCE_KEY',        'Z9t^Fp<>1oG[I5_V5,ScoA51lr@;<,QMuF.[:Os{>xuMMAqW%lEB-v}[{1S .onq');
define('AUTH_SALT',        'kb`R#[IryWfQ8isc^}$~5x#6|y~32)6zpVV3P2tJWzl7F,T;}Y$za-(fk?7n%qVN');
define('SECURE_AUTH_SALT', 'x,5KPPB2@]+t%2dy#+m8OM<dtR$.2hmwV=WqQzXO)o/HC`&V~CEQ96hq-1|Ry>l|');
define('LOGGED_IN_SALT',   'ctA@0jMDpD8#,Fdz:.`DlRvvS1g-L&&h++H|GRVE]TU4US&~8fF[svm=]p.[: Vt');
define('NONCE_SALT',       '/@=*#@%!Cfzy{9eGBjD@RKG]k%:T[]%>r_&0[?o=$hBKn_uW!Pqp1,YBi2N_s*Ld');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
