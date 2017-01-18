<?php 

require_once 'product.php';

Class Cloth extends Product {

	private $brand;

	public function __construct($id, $name, $price, $brand) {
		parent::__construct($id, $name, $price);
		$this->brand = $brand;
	}

	public function try() {

	}

}
