<?php
define('MAILING_LIST', $_SERVER['DOCUMENT_ROOT'] . '/admin/mailing_list.php');

function add_registered_user($name, $email, $comments) {
	// SECURE FILE WHEN YOU ARE DONE!!!
	file_put_contents(MAILING_LIST, "$name: $email [ $comments ]\n", FILE_APPEND);
}

function old($key) {
	if( !empty($_REQUEST[$key]) ) {
		return htmlspecialchars($_REQUEST[$key]);
	}
}

function valid_mail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function get_senders($path = MAILING_LIST) {
	$users = file($path);

	if ( count($users) ) {
		return array_map( function($user) {
			return explode(': ', htmlspecialchars($user));
			// return array_map('htmlspecialchars', $bits);
		}, $users);
	}
	return false;
}