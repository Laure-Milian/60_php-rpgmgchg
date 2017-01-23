<?php
define('BASEPATH', __DIR__);

require BASEPATH . '/controllers/shopping.php';
require BASEPATH . '/controllers/validateOrder.php';


if (!isset($_GET['page'])) {
	return (new ShoppingController())->home();
} 

if ($_GET['page'] === 'validation') {
	$current_shopping = new ShoppingController();
	$current_shopping->setSelectedClient();
	$current_shopping->setSelectedProducts();
	return (new ValidateOrder($current_shopping))->recapOrder();
}
