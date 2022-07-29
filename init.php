<?php		
	ini_set('session.bug_compat_warn', 0);
	ini_set('session.bug_compat_42', 0);
if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' );

	$DB = new mysqli( DBHOST, DBUSER, DBPASS, DBNAME );

	$_SESSION[ 'MESSAGE' ] = null;	
	