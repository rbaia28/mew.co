<?php

namespace App\Controller;

class Pokemon 
{
	private int $id;
	private int $uuid;
	private int $dex_id;
	private string $nickname;
	private bool $is_shiny;
	private bool $gender;
	private int $cp;
	private int $current_level; // Yes Becca I know this needs to be calculated per pokemon
	private int $location_id;
	private int $trainer_id;
	private bool $is_archived;

	public function __construct(int $id, int $uuid, int $dex_id, string $nickname, bool $is_shiny,string $gender, int $cp, int $current_level, int $location_id, int $trainer_id, bool $is_archived) {
		$this->id = $id;
		$this->uuid = $uuid;
		$this->dex_id = $dex_id;
		$this->nickname = $nickname;
		$this->is_shiny = $is_shiny;
		$this->gender = $gender;
		$this->cp = $cp;
		$this->current_level = $current_level;
		$this->location_id = $location_id;
		$this->trainer_id = $trainer_id;
		$this->is_archived = $is_archived;
	}

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of uuid
	 */ 
	public function getUuid()
	{
		return $this->uuid;
	}

	/**
	 * Set the value of uuid
	 *
	 * @return  self
	 */ 
	public function setUuid($uuid)
	{
		$this->uuid = $uuid;

		return $this;
	}

	/**
	 * Get the value of dex_id
	 */ 
	public function getDex_id()
	{
		return $this->dex_id;
	}

	/**
	 * Set the value of dex_id
	 *
	 * @return  self
	 */ 
	public function setDex_id($dex_id)
	{
		$this->dex_id = $dex_id;

		return $this;
	}

	/**
	 * Get the value of nickname
	 */ 
	public function getNickname()
	{
		return $this->nickname;
	}

	/**
	 * Set the value of nickname
	 *
	 * @return  self
	 */ 
	public function setNickname($nickname)
	{
		$this->nickname = $nickname;

		return $this;
	}

	/**
	 * Get the value of is_shiny
	 */ 
	public function getIs_shiny()
	{
		return $this->is_shiny;
	}

	/**
	 * Set the value of is_shiny
	 *
	 * @return  self
	 */ 
	public function setIs_shiny($is_shiny)
	{
		$this->is_shiny = $is_shiny;

		return $this;
	}

	/**
	 * Get the value of cp
	 */ 
	public function getCp()
	{
		return $this->cp;
	}

	/**
	 * Set the value of cp
	 *
	 * @return  self
	 */ 
	public function setCp($cp)
	{
		$this->cp = $cp;

		return $this;
	}

	/**
	 * Get the value of current_level
	 */ 
	public function getCurrent_level()
	{
		return $this->current_level;
	}

	/**
	 * Set the value of current_level
	 *
	 * @return  self
	 */ 
	public function setCurrent_level($current_level)
	{
		$this->current_level = $current_level;

		return $this;
	}

	/**
	 * Get the value of location_id
	 */ 
	public function getLocation_id()
	{
		return $this->location_id;
	}

	/**
	 * Set the value of location_id
	 *
	 * @return  self
	 */ 
	public function setLocation_id($location_id)
	{
		$this->location_id = $location_id;

		return $this;
	}

	/**
	 * Get the value of trainer_id
	 */ 
	public function getTrainer_id()
	{
		return $this->trainer_id;
	}

	/**
	 * Set the value of trainer_id
	 *
	 * @return  self
	 */ 
	public function setTrainer_id($trainer_id)
	{
		$this->trainer_id = $trainer_id;

		return $this;
	}

	/**
	 * Get the value of is_archived
	 */ 
	public function getIs_archived()
	{
		return $this->is_archived;
	}

	/**
	 * Set the value of is_archived
	 *
	 * @return  self
	 */ 
	public function setIs_archived($is_archived)
	{
		$this->is_archived = $is_archived;

		return $this;
	}

	/**
	 * Get the value of gender
	 */ 
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Set the value of gender
	 *
	 * @return  self
	 */ 
	public function setGender($gender)
	{
		$this->gender = $gender;

		return $this;
	}
}
