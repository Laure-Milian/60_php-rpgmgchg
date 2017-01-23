<?php 

require_once BASEPATH . '/models/Product.php';

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
