<?php
class Admin extends User {
	public function __construct($firstName, $lastName, $email, $password)
	{
		parent::__construct($firstName, $lastName, $email, $password, 'admin');
	}
}