<?php


class ValidateOrder extends ShoppingController {

	public function recapOrder() {
		$order = $this;
		require  BASEPATH .'/views/validateOrder.php';	
	}

	public function __construct() {
		parent::setSelectedClient();
		parent::setSelectedProducts();
	}

	public function getOrderClient() {
		return parent::getSelectedClient();
	}

	public function getOrderProducts() {
		return parent::getSelectedProducts();
	}

}