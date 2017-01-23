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


// Utiliser buy() pour chaque produit sélectionné
$error = false;
foreach ($current_products as $cp) {
	if (is_a($cp, 'Vegetable')) {
		if ($cp->isFresh()) {
			$currentClient->buy($cp);
		} else {
			$error = $cp;
		}
	} else {
		$currentClient->buy($cp);
	}
}


sendView($currentClient, $error);

function sendView($currentClient, $error) {
	$products = $currentClient->getCart();
	require $_SERVER['DOCUMENT_ROOT'] .'/views/validateOrder.php';
}