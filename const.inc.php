<?

/**
* const.inc - standard constants file.
* @author Eric Schabell <eric@schabell.com>
* @copyright 2006, GPL.
*/

// PHP should complain about uninitialized variables:
//
#error_reporting( E_ALL );
error_reporting( 0 );

// Database settings osiris.
//
define( "DB_SERVER",    "localhost" );
define( "DB_USER",      "babygame" );	
define( "DB_PASSWORD",  "your-password" );	
define( "DB_DATABASE",  "babygame" );	

// admin processors of tech reports:
define( "ADMIN_GAME", "your@email.com" );

// our logging location!
define( "BABYLOG", "/var/tmp/baby.log" );

// some general info.
define( "FAMILYNAME", "PAPILLAULT" );
define( "DUEDATE", "October 14th, 2007" );
define( "ENDSUBMITS", "2007-10-14" );
?>
