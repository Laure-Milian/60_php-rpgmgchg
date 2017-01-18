<?php 

require 'product.php';

Class Cloth extends Product {

	private $brand;

	public function __construct($id, $name, $price, $brand) {
		parent::__construct($id, $name, $price);
		$this->brand = $brand;
	}

	public function try() {

	}

}

$tshirt = new Cloth("riojri", "tshirt", 55, "niceClothing");
var_dump($tshirt);