<?php

require_once 'product.php';

Class Vegetable extends Product {

	private $productorName;
	private $harvestedAt;

	public function __construct($id, $name, $price, $productorName, $harvestedAt) {
		parent::__construct($id, $name, $price);
		$this->productorName = $productorName;
		$this->harvestedAt = $harvestedAt;
	}

	public function getProductorName() {
		return $this->productorName;
	}

	public function getHarvestedAt() {
		return $this->harvestedAt;
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
