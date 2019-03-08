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
define('AUTH_KEY',         'tnmvgt4V4wMoa0DTWVY9oTY4x4+0JOLp9fk+0KWR9Oc2dK1Wamx7AF5ec8htVnyQ1+jHvHeeVXpoE2wYfSe9zg==');
define('SECURE_AUTH_KEY',  'XNA00TeFdfcOoe5VeFrNzD0/jXWbBge8Za13e/IwPf6zu1rlAAHadvK7oeFuW41zyqvJawnYnahLAxNTITrN/A==');
define('LOGGED_IN_KEY',    'Vq2vjC1t0GLx+Xr9XX03kylr+rciRo79jbHYqegsqBhX3nusimUqk50cAjj5OiSCWIcBwEt1/Wh4An2G2AF0fQ==');
define('NONCE_KEY',        '4q0dorcpAuNv6WnD8RmCBn1e2OrSF/4h1a4gQduWxk3m2rSpzxUnxgHBe7XMdhFFfYOTzK1l5YSKc59KO6fxnQ==');
define('AUTH_SALT',        'EgN+eWoPW9EKpCc8FImACwmIh8dabyc1D710RJBQX343fQl4CqCi/c8A7ZXb1bWrq043Mj7tOW6dwQSfo8E9yg==');
define('SECURE_AUTH_SALT', 'dIjTtn6UMTd0JoZ0JZZMG90rlm/0b75wIN2vrEsVqeEmjr4pW5DWRRnhDy3hbdesBa+1Fudl4kUJUsGdCBebgg==');
define('LOGGED_IN_SALT',   'viRs/L2WlNTAQyncZFlqI7JTRZzguJk603xAO+IiAWeF4eRCGxR9+imSQiL3DbFgT0qiOVzIJFxG4PThNtspMQ==');
define('NONCE_SALT',       '90Y/v4plc5xFjRb7rSsmQ/cnlWvXvEWKP8ptW9S6Czba4et2t9+dW13qXy6VWTnoZZdKFsFPo3qLUuImFGvyyg==');
define('WP_DEBUG',true);
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',true);
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
