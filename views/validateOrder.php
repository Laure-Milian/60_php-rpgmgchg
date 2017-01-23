<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation de commande</title>
</head>
<body>

	<div> 
		Client : <?= $currentClient->getId() ?>
	</div>

	<div> Liste des produits achetés :
		<ul>
			<table>
				<tr>
					<th>Nom du produit</th>
					<th>Id du produit</th>
					<th>Prix du produit</th>
				</tr>
				<?php foreach ($products as $product) :	?>
					<tr>
						<td><?= $product->getName() ?></td>
						<td><?= $product->getId() ?></td>
						<td><?= $product->getPrice() ?></td>
					</tr>				
				<?php endforeach ?>
			</table>
		</ul>
	</div>

	<div>
		Prix total : <?= $currentClient->getBillAmount(); ?> €
	</div>
</body>
</html>