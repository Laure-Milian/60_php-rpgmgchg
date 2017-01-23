<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<!-- 	<link rel="stylesheet" href="views/table.css"> -->
	<?php
	$products_arr = require_once BASEPATH . '/data/products.php';
	$clients_arr = require_once BASEPATH . '/data/users.php';
	?>
</head>
<body>

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
			<table>
			<?php $panier = $client1->getCart();
				foreach ($panier as $boughtProduct) : ?>
				<tr>
					<td> <?= $boughtProduct->getId(); ?> </td>
					<td> <?= $boughtProduct->getName(); ?> </td>
					<td> <?=$boughtProduct->getPrice(); ?> </td>
					<td> <?=$boughtProduct->getProductorName(); ?> </td>
					<td> <?=$boughtProduct->getHarvestedAt(); ?> </td>
				</tr>
			</table>
			<?php endforeach?>
		</li>
	</ul>



	<h2>Votre second utilisateur achète un légume et un vêtement</h2>

	<?php 
		$client2 = $clients_arr[1];
		$produit2 = $products_arr[4]; 
		$client2->buy($produit1);
		$client2->buy($produit2);
	?>

	<ul>
		<li>Identifiant client : <?= $client2->getId() ?></li>
		<li>Montant de la facture : <?= $client2->getBillAmount(); ?> </li>
		<li>Produits achetés : 
			<table>		
			<?php $panier = $client2->getCart();
				foreach ($panier as $boughtProduct) : ?>
				<tr>
					<td> <?= $boughtProduct->getId(); ?> </td>
					<td> <?= $boughtProduct->getName(); ?> </td>
					<td> <?=$boughtProduct->getPrice(); ?> </td>
					
					<?php if (strstr($boughtProduct->getId(), 'vege')) : ?>
						<td> <?=$boughtProduct->getProductorName(); ?> </td>
						<td> <?=$boughtProduct->getHarvestedAt(); ?> </td>
					<?php else : ?>
						<td> <?=$boughtProduct->getBrand(); ?> </td>
					<?php endif ?>
				</tr>
			<?php endforeach?>
			</table>
		</li>
	</ul>
</body>
</html>