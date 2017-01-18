<?php

require 'user.php';

Class Client extends User {

	private $billAmount;
	private $cart = [];

	public function getBillAmount() {
		return $this->billAmount;
	}

	public function getCart() {
		return $this->cart;
	}

	public function buy($product) {
		$this->addProductToCart($product);
		$this->setBillAmount($product);
	}
	
	public function addProductToCart($product) {
		$this->cart[] = $product;
	}

	public function setBillAmount($product) {
		$price = $product->getPrice();
		$this->billAmount = $this->billAmount + $price;
	}
}

