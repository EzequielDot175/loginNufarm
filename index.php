<?php 
	require_once('../core_nufarm/libs.php');

	$login = Auth::checkLogin();

	if(isset($_POST['_token'])):

		if(Token::check($_POST['_token'])):
			Auth::userLogin($_POST['nf_username'],$_POST['nf_password']);
		endif;

	else:
		Token::generate();
	endif;
	
	if($login->check):
		Auth::startSession();
		
		require_once('select.php');
	else:
		require_once('login.php');
	endif;

 ?>