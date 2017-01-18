<?php 

class User {
	private $email;
	private $id;
	private $created_at;

	public function __construct($email, $id, $created_at) {
		$this->email = $email;
		$this->id = $id;
		$this->created_at = $created_at;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getId() {
		return $this->id;
	}

	public function getCreatedAt() {
		return $this->created_at;
	}
}

$user1 = new User("bla", 56, 3091990);

var_dump($user1);
