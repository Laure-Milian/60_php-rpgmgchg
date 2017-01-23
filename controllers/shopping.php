<?php

class ShoppingController {

	public function sendView() {
		$clients = require $_SERVER['DOCUMENT_ROOT'] . '/data/users.php';
		$products = require $_SERVER['DOCUMENT_ROOT'] . '/data/products.php';
		require  $_SERVER['DOCUMENT_ROOT'] .'/views/shopping.php';
	}

}