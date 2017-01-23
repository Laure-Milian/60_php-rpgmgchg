<?php

require_once BASEPATH . '/models/User.php';

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
		$this->addToBillAmount($product);
	}
	
	public function addProductToCart($product) {
		$this->cart[] = $product;
	}

	public function addToBillAmount($product) {
		$price = $product->getPrice();
		$this->billAmount = $this->billAmount + $price;
	}

	public function deleteFromCart($idProduct) {
		foreach ($this->cart as $product) {
			
			if ($idProduct === $product->getId()) {
				
				$pos = array_search($product, $this->cart);
				array_splice($this->cart, $pos, 1);

				$this->subtractToBillAmount($product);
			}

		}
	}

	public function subtractToBillAmount($product) {
		$price = $product->getPrice();
		$this->billAmount = $this->billAmount - $price;
	}


}

