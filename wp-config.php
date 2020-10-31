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
define('AUTH_KEY',         '4B+MvaNmKp91SO/Dpyvo1Pk8YXYzkkFrfwq2RrdU1ZptD2h91RtYwghh6UxlQorjGHYrR7PVyvhF7Oj3YqvgAQ==');
define('SECURE_AUTH_KEY',  '5VR9eZEr+hsrbeJJ0nPEaB4aQ6EYX/jQuAUfqPY0J+tFNTDSl873ZuxoLgLxoj6oqXqxNgaTBM93wzipXLT/SA==');
define('LOGGED_IN_KEY',    'RwV+3QKtkbzP94tOosIDWkgskDnJMJUwGXhV5vbYiZxlvxuHql90fSdfy9Ur0/7aYnckSWw952vJcJzQujJWLQ==');
define('NONCE_KEY',        'YhNB/ciVlBNtHAlbWH//L6uUOWyhmhpYgY+kubLRXBDJ25uJmKiN1hlcEMRf15o+SBnEyS9ZIQGx//+NK6FtbA==');
define('AUTH_SALT',        'j2A5XFF7lK6i1SckAZmbVE/hhZ4GrWz5OggYgl0gakaidBSE/BpX0frsWiZKMlqoaxq0ITDjlTSo37uyxvKIwQ==');
define('SECURE_AUTH_SALT', 'M9x/KcLgepVRP7TrSGratoY5vzNLI7EO9ILYmfr+lrIiZJwThQ/o9XO/lAiT6ZpTZsds0ILdLPq4U74an5JqlA==');
define('LOGGED_IN_SALT',   '5tRSZiOTPVf3Pf11F8OzJZOWWZ+NmDKtMGh6LGZ/bQeuFrVgdxGU60OlKnOuxcDlxC+Zs4EMHl48nmtZYUJ6rA==');
define('NONCE_SALT',       '1KOcjowS/WXQMRqTgVmMkXTUWJA9qx1jyXnk+RCdI6YJJ+MD/jtL2T0s6Js4gKlsqxlLrNCnB5zRXB4uo/mD4A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
