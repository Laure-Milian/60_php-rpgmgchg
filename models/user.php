<?php 

class User {
	private $email;
	private $id;
	private $created_at;

	public function __construct($email, $id, $created_at) {
		$this->setEmail($email);
		$this->setId($id);
		$this->setCreatedAt($created_at);
	}

	// Getters
	public function getEmail() {
		return $this->email;
	}

	public function getId() {
		return $this->id;
	}

	public function getCreatedAt() {
		return $this->created_at;
	}

	// Setters
	public function setEmail($email) {
		$this->email = $email;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
	}
}