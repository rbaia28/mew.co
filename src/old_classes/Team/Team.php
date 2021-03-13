<?php

abstract class Team {
	protected int $id;
	protected string $name;
	protected string $color;

	public function __construct(string $name, string $color) {
		$this->name = $name;
		$this->color = $color;
	}

	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of name
	 */ 
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @return  self
	 */ 
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of color
	 */ 
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * Set the value of color
	 *
	 * @return  self
	 */ 
	public function setColor($color)
	{
		$this->color = $color;

		return $this;
	}
}
