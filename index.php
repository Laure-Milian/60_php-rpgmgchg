<?php

require $_SERVER['DOCUMENT_ROOT'] . '/controllers/shopping.php';

if (!isset($_GET['page'])) {
	(new ShoppingController())->sendView();
}