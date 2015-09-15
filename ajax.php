<?php require_once('../core_nufarm/libs.php');
	Ajax::Angular();

	Utils::POST('loginController', function(){
		Ajax::call($_POST['method']);
	});	
?>