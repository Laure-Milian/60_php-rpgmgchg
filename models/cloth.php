<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/models/product.php';

Class Cloth extends Product {

	private $brand;

	public function __construct($id, $name, $price, $brand) {
		parent::__construct($id, $name, $price);
		$this->brand = $brand;
	}

	public function getBrand() {
		return $this->brand;
	}

	public function try() {

	}

}
