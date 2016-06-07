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
define('DB_NAME', 'sravasti_db');

/** MySQL database username */
define('DB_USER', 'sravasti_admin');

/** MySQL database password */
define('DB_PASSWORD', 'xY2UYjAnCxJy7ZUT');

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
define('AUTH_KEY',         '=U59fEg|W@j7|{<yN2&S<AdN[q9!QSDZ|mnASaIB)T<CLYNw)d|d7mlq]mxW/| ]');
define('SECURE_AUTH_KEY',  '@Tw.*LHFs/A()FRV/Wrl)>qnsq/_0xF0XoH)A++CDDT?e@q>/4nBLp&2[?2C;Us7');
define('LOGGED_IN_KEY',    'tWhr7)UBT1wE).!(8b]CdON2miA)4@c2e$]t-tuZDY.;M|7J!?:MuA4LD(BeoS!n');
define('NONCE_KEY',        'Lpt<ow|?JP~ax1?t~tT/RWEIHUf(W-9z4I-j1T-#?/!m R:_-d5c/rS$.`LEwS%n');
define('AUTH_SALT',        'E=|gxA9u7V1&~53&ljki:7| !rn,tg9cEG8T<>-%u^l-g[fP8E?s/iT-RDtEiKu<');
define('SECURE_AUTH_SALT', '+j)fA,3WD/`/DQY+VE?^{>T%-f=3(aalvtv6x}N-vO:i;4s5:qw{D[0+-[|)S-c9');
define('LOGGED_IN_SALT',   'ncF|6|D;c?Sm%dH7VA?uO&?,{S?rda=_t,@mpJNOzUODnJH~E)XiluRM`UV?j{o#');
define('NONCE_SALT',       'D!bc+JL1o;^TeVdHyw40:qLSQm)HI}<~i}Q}pF=Yt(=L^IW3HBLsvh{j477D;5gK');

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
define('FS_METHOD', direct);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
