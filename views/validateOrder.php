<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation de commande</title>
</head>
<body>

	<?php 
	$clients = require_once $_SERVER['DOCUMENT_ROOT'] . '/data/users.php';
	$products = require $_SERVER['DOCUMENT_ROOT'] . '/data/products.php';
	
	// Retrouver les produits correspondants aux ID sélectionnés
	
	$selected_products = [$_POST["selectProduct1"], $_POST["selectProduct2"], $_POST["selectProduct3"]];
	
	$current_products = array_map(function($selectProductId) use ($products) {
		foreach ($products as $p) {
			if ($selectProductId === $p->getId()) {
				return $p;
			}
		}
	}, $selected_products);

	// Retrouver le client correspondant à l'ID sélectionné
	
	$idClient = $_POST["selectClient"];
	
	function findClient($idClient, $clients) {
		foreach ($clients as $client) {
			if ($idClient === $client->getId()) {
				return $client;
			}
		}
	}

	$currentClient = findClient($idClient, $clients);

	// Utiliser buy() sur chaque produit sélectionné
	echo 'Liste des produits achetés : ';
	foreach ($current_products as $cp) {
		echo '<div>' . $cp->getName() . '</div>';
		$currentClient->buy($cp);
	}

	echo '<div> Panier total :' . ($currentClient->getBillAmount()) . '€ </div>';




	/*$idClient = $_POST["selectClient"];

	$selected_products = [$_POST["selectProduct1"], $_POST["selectProduct2"], $_POST["selectProduct3"]]; 

	function findProducts($selected_products, $products) {
		$len = count($selected_products);
		foreach ($products as $product) {
			for ($i = 0 ; $i < $len ; $i++) {
				if ($product->getId() === $selected_products[$i]) {
					return $product;
				}
			}

		}
	}


	//array_map("findProducts", $selected_products)

	var_dump(findProducts($selected_products, $products));*/


	?>
	

</body>
</html>