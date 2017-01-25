<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validation de commande</title>
</head>
<body>
	<div> 
		Client : <?= $order->getOrderClient()->getId() ?>
	</div>

	<div> Liste des produits sélectionnés :
		<ul>
			<table>
				<tr>
					<th>Nom du produit</th>
					<th>Id du produit</th>
					<th>Prix du produit</th>
					<th>Commentaire</th>
				</tr>
				<?php foreach ($order->getOrderProducts() as $product) :	?>
					<tr>
						<td><?= $product->getName() ?></td>
						<td><?= $product->getId() ?></td>
						<td><?= $product->getPrice() ?></td>
						<td>
							<?php 
							if (is_a($product, 'Vegetable') && !$product->isFresh()) {
								echo "Attention ! Ce produit est périmé.";
							}
							?>
						</td>
					</tr>			
				<?php endforeach ?>
			</table>
		</ul>
	</div>

	<div>
		Le prix de votre panier : <?= $order->getOrderClient()->getBillAmount(); ?>
	</div>


</body>
</html>