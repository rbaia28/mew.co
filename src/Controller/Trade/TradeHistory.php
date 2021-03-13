<?php

namespace App\Controller;

class TradeHistory
{
	private int $id;
	private int $trainer_1_id;
	private int $trainer_2_id;
	private int $pokemon_id;

	public function __construct(int $trainer_1_id, int $trainer_2_id, int $pokemon_id) {
		$this->trainer_1_id = $trainer_1_id;
		$this->trainer_2_id = $trainer_2_id;
		$this->pokemon_id = $pokemon_id;
	}

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of trainer_1_id
	 */ 
	public function getTrainer_1_id()
	{
		return $this->trainer_1_id;
	}

	/**
	 * Set the value of trainer_1_id
	 *
	 * @return  self
	 */ 
	public function setTrainer_1_id($trainer_1_id)
	{
		$this->trainer_1_id = $trainer_1_id;

		return $this;
	}

	/**
	 * Get the value of trainer_2_id
	 */ 
	public function getTrainer_2_id()
	{
		return $this->trainer_2_id;
	}

	/**
	 * Set the value of trainer_2_id
	 *
	 * @return  self
	 */ 
	public function setTrainer_2_id($trainer_2_id)
	{
		$this->trainer_2_id = $trainer_2_id;

		return $this;
	}

	/**
	 * Get the value of pokemon_id
	 */ 
	public function getPokemon_id()
	{
		return $this->pokemon_id;
	}

	/**
	 * Set the value of pokemon_id
	 *
	 * @return  self
	 */ 
	public function setPokemon_id($pokemon_id)
	{
		$this->pokemon_id = $pokemon_id;

		return $this;
	}
}
