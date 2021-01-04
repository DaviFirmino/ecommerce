<?php





$app->post("admin/users/create", function(){

	User::verifyLogin();

	$user = new User();

	$user->setData($_POST);

	var_dump($user);

});


$app->post("admin/users/:iduser", function($iduser){

	User::verifyLogin();

});

?>