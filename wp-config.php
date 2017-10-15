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
define('DB_NAME', 'bharatlo_wp845');

/** MySQL database username */
define('DB_USER', 'bharatlo_wp845');

/** MySQL database password */
define('DB_PASSWORD', 'x804.np-9S');

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
define('AUTH_KEY',         'x5edbwnn5ytfvcnt9nmn4jymikbj3xs1o9fjiev7zzcdt71q06ffzrnzzk8tayi4');
define('SECURE_AUTH_KEY',  'vsjwdqmkumlfzdty0wjm3wq2oeovvnokldc7fzbnbmcsd1bwvsgzh117esnoakvn');
define('LOGGED_IN_KEY',    'bglj6befx84byhikrtubbyk6uzfig7gzudenhpmwno3myonw6jm83smasn4wmtdc');
define('NONCE_KEY',        'bmgmgn2cvicffxppul5l1qqgxlg4tnfnyhz3wfqalda3wtcfns4q1gz5m07ev4hu');
define('AUTH_SALT',        'tyr2z9jtmbsbes4re1djjsvtoynaeiu8phegecmdfvbg5j9fmwng7igpeelsvuk3');
define('SECURE_AUTH_SALT', 't165vm7togvmsro6bhbfuyaovwetozas7xj7cegj5b2crmkun4p9uanhh7sqoekp');
define('LOGGED_IN_SALT',   'vdffmaee8gu4vbxvjnvc7riksu3hvvytp6m7mimqmskbengqqhkn4jiqdnun9rkn');
define('NONCE_SALT',       'iobosvw1lf65e0gtj1rbixnqeu3idlbp1qqubnzsinfxsenyvke537nogrhjhud2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphu_';

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
