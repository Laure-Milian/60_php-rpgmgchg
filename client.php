<?php

require 'user.php';

Class Client extends User {
	
}

$client1 = new Client("client@mail.com", "idClient", 90909);
echo $client1->getEmail();