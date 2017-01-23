<?php

class ShoppingController {

	private $selectedClient;

	public function home() {
		$clients = require BASEPATH . '/data/users.php';
		$products = require BASEPATH . '/data/products.php';
		require  BASEPATH .'/views/shopping.php';
	}

	public function getSelectedClient() {
		return $this->selectedClient;
	}

	public function setSelectedClient() {
		$clients = require BASEPATH . '/data/users.php';
		$idClient = $_POST["selectClient"];

		foreach ($clients as $client) {
			if ($idClient === $client->getId()) {
				$this->selectedClient = $client;
			}
		}
		
	}

	public function setSelectedProducts() {
		$products = require BASEPATH . '/data/products.php';
		$selected_products_id = [$_POST["selectProduct1"], $_POST["selectProduct2"], $_POST["selectProduct3"]];

		$current_products = array_map(function($productsId) use ($products) {
			foreach ($products as $p) {
				if ($productsId === $p->getId()) {
					if (is_a($p, 'Vegetable')) {
						if ($p->isFresh()) {
							$this->selectedClient->buy($p);
						} else {
							echo "l'un des produits est périmé. Lui, là : " . $p->getId() . " " . $p->getName();
						}
					} else {
						$this->selectedClient->buy($p);
					}
				}
			}
		}, $selected_products_id);

	}

}