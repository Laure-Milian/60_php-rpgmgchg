<?php $clients = require $_SERVER['DOCUMENT_ROOT'] . '/data/users.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shopping Time</title>
</head>
<body>

<?php var_dump($clients); ?>

<select name="selectClient" id="selectClient">
	<?php foreach ($clients as $client): ?>
		<label for="selectClient"></label>
			<option value="<?= $client->getId() ?>"> <?= $client->getId(); ?> </option>
	<?php endforeach ?>
</select>


	
</body>
</html>

Créer une page shopping.php qui va permettre de créer une commande pour un client.

Afficher un select qui va permettre d'afficher et de sélectionner un client.

Afficher 3 select successifs qui vont permettre de sélectionner chacun un produit.

Ajouter un bouton d'envoi de commande.

