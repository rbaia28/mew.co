<?php

class Trainer extends User
{
	private int $uuid;
	private int $trainer_name;
	private string $friend_code;
	private int $team_id;
	private string $contact_method; //FIXME correct data type once known
	private int $level;
	private string $municipality;
	private string $postal_code;
	private string $region;
	private string $country;

	private function __construct(User $user, int $uuid, string $trainer_name, string $friend_code, int $team_id, string $contact_method, int $level, string $municipality, string $postal_code, string $region, string $country)
	{
		// create user object
		$this->uuid = $user->id;
		$this->trainer_name = $trainer_name;
		$this->friend_code = $friend_code;
		$this->team_id = $team_id;
		$this->contact_method = $contact_method;
		$this->level = $level;
		$this->municipality = $municipality;
		$this->postal_code = $postal_code;
		$this->region = $region;
		$this->country = $country;
	}

	/**
	 * Construct trainer from associative array
	 *
	 * @return Trainer
	 */
	public function fromArray(array $trainer)
	{
		$this->__construct(
			$trainer['user'],
			$trainer['uuid'],
			$trainer['trainer_name'],
			$trainer['friend_code'],
			$trainer['team_id'],
			$trainer['contact_method'],
			$trainer['level'],
			$trainer['municipality'],
			$trainer['postal_code'],
			$trainer['region'],
			$trainer['country']
		);
	}

	/**
	 * Get the value of uuid
	 */
	public function getUuid()
	{
		return $this->uuid;
	}

	/**
	 * Get the value of trainer_name
	 */
	public function getTrainer_name()
	{
		return $this->trainer_name;
	}

	/**
	 * Set the value of trainer_name
	 *
	 * @return  self
	 */
	public function setTrainer_name($trainer_name)
	{
		$this->trainer_name = $trainer_name;

		return $this;
	}

	/**
	 * Get the value of friend_code
	 */
	public function getFriend_code()
	{
		return $this->friend_code;
	}

	/**
	 * Set the value of friend_code
	 *
	 * @return  self
	 */
	public function setFriend_code($friend_code)
	{
		$this->friend_code = $friend_code;

		return $this;
	}

	/**
	 * Get the value of team_id
	 */
	public function getTeam_id()
	{
		return $this->team_id;
	}

	/**
	 * Set the value of team_id
	 *
	 * @return  self
	 */
	public function setTeam_id($team_id)
	{
		$this->team_id = $team_id;

		return $this;
	}

	/**
	 * Get the value of contact_method
	 */
	public function getContact_method()
	{
		return $this->contact_method;
	}

	/**
	 * Set the value of contact_method
	 *
	 * @return  self
	 */
	public function setContact_method($contact_method)
	{
		$this->contact_method = $contact_method;

		return $this;
	}

	/**
	 * Get the value of level
	 */
	public function getLevel()
	{
		return $this->level;
	}

	/**
	 * Set the value of level
	 *
	 * @return  self
	 */
	public function setLevel($level)
	{
		$this->level = $level;

		return $this;
	}

	/**
	 * Get the value of municipality
	 */
	public function getMunicipality()
	{
		return $this->municipality;
	}

	/**
	 * Set the value of municipality
	 *
	 * @return  self
	 */
	public function setMunicipality($municipality)
	{
		$this->municipality = $municipality;

		return $this;
	}

	/**
	 * Get the value of postal_code
	 */
	public function getPostal_code()
	{
		return $this->postal_code;
	}

	/**
	 * Set the value of postal_code
	 *
	 * @return  self
	 */
	public function setPostal_code($postal_code)
	{
		$this->postal_code = $postal_code;

		return $this;
	}

	/**
	 * Get the value of region
	 */
	public function getRegion()
	{
		return $this->region;
	}

	/**
	 * Set the value of region
	 *
	 * @return  self
	 */
	public function setRegion($region)
	{
		$this->region = $region;

		return $this;
	}

	/**
	 * Get the value of country
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Set the value of country
	 *
	 * @return  self
	 */
	public function setCountry($country)
	{
		$this->country = $country;

		return $this;
	}
}
