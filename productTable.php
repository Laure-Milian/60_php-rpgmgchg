<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tableau de produits</title>
	<link rel="stylesheet" href="table.css">
</head>
<body>
	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Price</td>
			<td>ProductorName</td>
			<td>HarvestedAt</td>
			<td>Brand</td>
		</tr>
		<?php 
		$products = require('products.php');
		foreach ($products as $product) : ?>
		<tr>

			<td><?= $product->getId(); ?></td>
			<td><?= $product->getName(); ?></td>
			<td><?= $product->getPrice(); ?></td>

			<?php 
				$id = $product->getId();
				if (strstr($id, 'vege')) : 
			?>
			
				<td><?= $product->getProductorName(); ?></td>
				<td><?= $product->getHarvestedAt(); ?></td>
				<td></td>
				
			<?php else : ?>
				<td></td>
				<td></td>
				<td><?= $product->getBrand(); ?></td>

			<?php endif ?>

		</tr>
	<?php endforeach ?>
</table>


</body>
</html>