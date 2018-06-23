<?php 
require_once("include/database.php");
require_once("include/functions.php");

if (isset($_POST['email'])) {

	$email = trim($_POST['email']);

	$insert_result = insert_subscriber($email);

	$header = 'Location: /?subscribe=';

	$header .= $insert_result;

	header($header);

}else{

	header('Location: /');
}

?>