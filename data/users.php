<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/models/client.php';


	$client1 = new Client("client1@mail.com", "client1", date('l jS \of F Y h:i:s A'));
	$client2 = new Client("client2@gmail.com", "client2", date('l jS \of F Y h:i:s A'));

	$users = [$client1, $client2];

	return $users;