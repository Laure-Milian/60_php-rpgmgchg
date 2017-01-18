<?php

require 'product.php';

class Vegetable extends Product {

	private $productorName;
	private $harvestedAt;

	public function __construct($id, $name, $price, $productorName, $harvestedAt) {
		parent::setId($id);
		parent::setName($name);
		parent::setPrice($price);
		$this->productorName = $productorName;
		$this->harvestedAt = $harvestedAt;
	}

	public function isFresh() {
		$current = time();
		$harvest = $this->harvestedAt;
		$diff = $harvest - $current;
		$diffHours = $diff / 60 / 60;
		if ($diffHours < 24) {
			return true;
		} else {
			return false;
		}
	}
}


$carotte = new Vegetable("id1", "carotte", 5, "Judy Hopps", "1484732020");
var_dump($carotte);

echo $carotte->isFresh();