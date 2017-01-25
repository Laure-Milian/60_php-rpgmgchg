<?php


class ValidateOrder {

	private $order;

	public function __construct($data) {
		$this->order = $data->getSelectedClient();
	}

	public function getOrder() {
		return $this->order;
	}

	public function recapOrder() {
		$currentClient = $this->getOrder();
		require  BASEPATH .'/views/validateOrder.php';	
	}

}