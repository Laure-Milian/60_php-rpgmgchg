<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php
	$products_arr = require 'products.php';
	$clients_arr = require 'users.php';
	?>
</head>
<body>

	votre second utilisateur achète un légume et un vêtement
	Afficher toutes les informations nécessaires.

	<h2>votre premier utilisateur achète un de vos légumes</h2>
	<?php 
		$client1 = $clients_arr[0];
		$produit1 = $products_arr[0]; 
		$client1->buy($produit1);
	?>
	<ul>
		<li>Identifiant client : <?= $client1->getId() ?></li>
		<li>Montant de la facture : <?= $client1->getBillAmount(); ?> </li>
		<li>Produit acheté : 
			<ul>
			<?php $panier = $client1->getCart();
				foreach ($panier as $boughtProduct) : ?>
				<li> <?= $boughtProduct->getId(); ?> </li>
				<li> <?= $boughtProduct->getName(); ?> </li>
				<li> <?=$boughtProduct->getPrice(); ?> </li>
				<li> <?=$boughtProduct->getProductorName(); ?> </li>
				<li> <?=$boughtProduct->getHarvestedAt(); ?> </li>
			</ul>
			<?php endforeach?>
		</li>
	</ul>
	
</body>
</html>