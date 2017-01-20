<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation de commande</title>
	<?php $products = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/products.php'; ?>
	<?php $clients = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/users.php'; ?>
</head>
<body>

	<?php 
	$idClient = $_POST["selectClient"];
	$selected_products = [$_POST["selectProduct1"], $_POST["selectProduct2"], $_POST["selectProduct3"]]; 
	$len = count($selected_products);

	foreach ($products as $product) {
		for ($i = 0 ; $i < $len ; $i++) {
			if ($product->getId() === $selected_products[$i]) {
				var_dump($product);
			}
		}
	}



	/*foreach ($clients as $client) {
		if ($idClient === $client->getId()) {
			$client->buy($product1);
		}
	}*/

	?>
	

</body>
</html>