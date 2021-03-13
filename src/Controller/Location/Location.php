<?php

namespace App\Controller;

class Location
{
	private int $id;
	private string $address;
	private string $municipality;
	private string $region;
	private string $postalCode;
	private string $country;

	public function __construct(string $address, string $municipality, string $region, string $postalCode, string $country)
	{
		$this->address = $address;
		$this->municipality = $municipality;
		$this->region = $region;
		$this->postalCode = $postalCode;
		$this->country = $country;
	}

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of address
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Set the value of address
	 *
	 * @return  self
	 */
	public function setAddress($address)
	{
		$this->address = $address;

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
	 * Get the value of postalCode
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * Set the value of postalCode
	 *
	 * @return  self
	 */
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;

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
