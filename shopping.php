<?php $clients = require $_SERVER['DOCUMENT_ROOT'] . '/data/users.php'; ?>
<?php $products = require $_SERVER['DOCUMENT_ROOT'] . '/data/products.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Time</title>
</head>
<body>

	<form action="/" method="post">

		<div>
			<label for="selectClient">Sélectionner un client : </label>
			<select name="selectClient" id="selectClient">
				<?php foreach ($clients as $client): ?>
					<option value="<?= $client->getId() ?>"> <?= $client->getId(); ?> </option>
				<?php endforeach ?>
			</select>
		</div>

		<div>
			<label for="selectProduct1">Sélection un 1er produit :</label>
			<select name="selectProduct1" id="selectProduct1">
				<?php foreach ($products as $product): ?>
					<option value="<?= $product->getName() ?>"> <?= $product->getName(); ?> </option>
				<?php endforeach ?>
			</select>
		</div>

		<div>
			<label for="selectProduct2">Sélection un 2è produit :</label>
			<select name="selectProduct2" id="selectProduct2">
				<?php foreach ($products as $product): ?>
					<option value="<?= $product->getName() ?>"> <?= $product->getName(); ?> </option>
				<?php endforeach ?>
			</select>
		</div>

		<div>
			<label for="selectProduct3">Sélection un 3è produit :</label>
			<select name="selectProduct3" id="selectProduct3">
				<?php foreach ($products as $product): ?>
					<option value="<?= $product->getName() ?>"> <?= $product->getName(); ?> </option>
				<?php endforeach ?>
			</select>
		</div>

		<div>
			<input type="submit" value="Envoyer la commande">
		</div>

	</form>
	
</body>
</html>