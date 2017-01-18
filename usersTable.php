<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Tableau des Utilisateurs</title>
	<link rel="stylesheet" href="usersTable.css">
	<?php $users = require('users.php'); ?>
</head>
<body>
	<table>
		<tr>
			<td>Email</td>
			<td>Id</td>
			<td>Créé le</td>
		</tr>
		<?php 
			foreach ($users as $user) : 
		?>
		<tr>
			<td><?= $user->getEmail(); ?></td>
			<td><?= $user->getId(); ?></td>
			<td><?= $user->getCreatedAt(); ?></td>
		</tr>
		<?php endforeach ?>
	</table>



</body>
</html>