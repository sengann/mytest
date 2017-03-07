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
define('DB_NAME', 'sinnsisamuth20160908');

/** MySQL database username */
define('DB_USER', 'sinnsisamuth');

/** MySQL database password */
define('DB_PASSWORD', '#S1nns1s@muth#');

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
define('AUTH_KEY',         '|_XyQ*ac7>)2 2xdQ(GV1T:|)5_OUwvDv=gs!wo&#@1}r^x&mLlDoSAD|z!v`&5T');
define('SECURE_AUTH_KEY',  '-ab(mN=5(qJ{QvBDWcC+{~KixOWetT{|UeegRzV,-|Da|E>YIG@(Da^vh&8FW[4q');
define('LOGGED_IN_KEY',    'X#u]%2<]0J^DJyb6L#wEaA8}ha9[S}mtph$1VN:7-B>fz!85?3d68j{.m+/G&.}A');
define('NONCE_KEY',        '4!cQ%K*QTYX;ndm=;Y!Vm~Of,o#(h+|!bETRr^g-#?R+%!L;e4}^bWh*q6Wt_+r?');
define('AUTH_SALT',        'N3ILi?6GL_8(8U&QH)BDyp-+IW|%|*FG}W9f[}(0P.-pQa4/h^+S5:u79wb-R*3N');
define('SECURE_AUTH_SALT', '_qh+^U+kvVF&ltbAPW#$+@yFn#z`cZU@04H`rk|*?`6f~u/{{|6XN|)#hM5 lG&&');
define('LOGGED_IN_SALT',   '{q|.Nsw8*:X5k#}Eo,x*DQVGsSt(aiAe`8ns36HI%Y9)%A)[YA6C%Hk3k0z@zO.=');
define('NONCE_SALT',       'C h|p8D,u<SkHiNZ%atCS0B&n{S!R+^8xbE+FexZe)}]lHPGFKWA8q!FR-g2w37%');

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