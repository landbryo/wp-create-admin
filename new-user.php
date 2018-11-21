<?php

function sc_add_admin(){
	$login = 'username';
	$passw = 'mysuperlongcomplicatedpassword';
	$email = 'webmin@example.com';

	if ( !username_exists( $login )  && !email_exists( $email ) ) {
		$user_id = wp_create_user( $login, $passw, $email );
		$user = new WP_User( $user_id );
		$user->set_role( 'administrator' );
	}
}
add_action('init','sc_add_admin');