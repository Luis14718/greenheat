<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

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

define('DB_NAME', 'reenear8_greenearth');


/** MySQL database username */

define('DB_USER', 'reenear8_WP0RJ');


/** MySQL database password */

define('DB_PASSWORD', 'FW*9O0I%[$3lf$_so');


/** MySQL hostname */

define('DB_HOST', 'localhost');


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



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

define('AUTH_KEY', '6dcf651df4415d99b494c54ed70fac302ada5dc96e9dbad6a7eb3844cc6dddf5');
define('SECURE_AUTH_KEY', 'ace11f5a5a35e9b65db40071fa0bf61cdf28dd83e3d3e894c6e3c4ed28ccb45a');
define('LOGGED_IN_KEY', '5f091b995b03cf616dfb238347f3abcf62f1af3ab0b2754defb61e25e23477a7');
define('NONCE_KEY', '4efda5eb851a28a267736b030474a9ebd0a798b34fdc267f40f489c1257cee30');
define('AUTH_SALT', 'd8b2160ece7c759fdeb01868c50fa5bf14c6a314c98a1bc03376c8ae4d223425');
define('SECURE_AUTH_SALT', '37dfb820cc17b0c1adf82afa456af3e9c5258947505462085a4f9f8d4e34bdfa');
define('LOGGED_IN_SALT', '8c5c7bc9f1beace2e096e7e14f5fd1224ea982fec74927e2c1eff3e300539729');
define('NONCE_SALT', '8c76ebf14bb68056cf02d802824db68b4184677579b443b295a5ea10dfc1efe4');


/**#@-*/



/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);


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



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

