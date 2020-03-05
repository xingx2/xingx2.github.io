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
define( 'DB_NAME', 'me' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#q0xHP_:-rAyS9!L_z.h8E NJ*m./|6pfiU+gyY-6Bhd1pIv(#pFUe}_gJDS=t`!' );
define( 'SECURE_AUTH_KEY',  '{${r56k&H01kDu>M3l}y@d AOz>c4HHT5g:jpSZ87rl)m/::nu=YHK]5MnMHoiq~' );
define( 'LOGGED_IN_KEY',    'NIC7IW<rp8I9GM*Hf1vQzN9 x:DIZih)?=bc[{bCQG79%YVfh&0KVbQR)S5fuz45' );
define( 'NONCE_KEY',        '39QB6| g)N5`UOP`~@`9Qn9,2//)/&NK7i<jiY8l.^J`i8!`v-h94= `<)r#Dqxa' );
define( 'AUTH_SALT',        'o9fzOf$zs?$nh9Nc9/!4y!fN(H*5|`_!<^TALGeiA{kD9R?tk:1mt(@HuLoVu,9W' );
define( 'SECURE_AUTH_SALT', '#rX)ZMrv^>`,qVm5 ll`]ZJzS@rn,v~=vjS`er(%sK_C)~9.)?+{_g,/~oqaQ=0I' );
define( 'LOGGED_IN_SALT',   's{)# r!8z#zm}?H>lpB5h>yK%BF@?U@uEE#=`RF<O2KE$Kvrz~j_GwYDdJ>YGF^h' );
define( 'NONCE_SALT',       'rr/`~%N#xFvPFZn02}__cA6`C/fg8}t.orwJaw8s$qouwy)2@BCH):DDmmyY=Xlx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
