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
				<?php foreach ($currentClient->getCart() as $product) :	?>
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

	<div>
		Supprimer un produit du panier :
		<form action="get">
			<label for="deleteProduct"></label>
			<select name="deleteProduct" id="deleteProduct">
				<?php foreach ($currentClient->getCart() as $product) :	?>
					<option value="<?= $product->getId() ?>"> <?= $product->getName() ?> </option>
				<?php endforeach ?>
			</select>
			<input type="submit" label="Supprimer ce produit">
		</form>
		<?php /*$currentClient->deleteFromCart('vege2');*/
		echo $currentClient->getBillAmount(); ?>
	</div>
</body>
</html>