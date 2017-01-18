<?php 
require 'client.php';

function getUsers() {
	$client1 = new Client("client1@mail.com", "client1", 111111);
	$client2 = new Client("client2@gmail.com", "client2", 222222);

	$users = [$client1, $client2];

	return $users;
}

var_dump(getUsers());

