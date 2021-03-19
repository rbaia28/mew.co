<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", uniqueConstraints={@ORM\UniqueConstraint(name="uuid", columns={"uuid"})})
 * @ORM\Entity
 */
class Pokemon
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="uuid", type="integer", nullable=false)
     */
    private $uuid;

    /**
     * @var int
     *
     * @ORM\Column(name="dex_id", type="integer", nullable=false)
     */
    private $dexId;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=20, nullable=false)
     */
    private $nickname;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_shiny", type="boolean", nullable=false)
     */
    private $isShiny = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp", type="integer", nullable=false)
     */
    private $cp;

    /**
     * @var int
     *
     * @ORM\Column(name="current_level", type="integer", nullable=false)
     */
    private $currentLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="location_id", type="integer", nullable=false)
     */
    private $locationId;

    /**
     * @var int
     *
     * @ORM\Column(name="trainer_id", type="integer", nullable=false)
     */
    private $trainerId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_archived", type="boolean", nullable=false)
     */
    private $isArchived = '0';



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of uuid
     *
     * @return  int
     */ 
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set the value of uuid
     *
     * @param  int  $uuid
     *
     * @return  self
     */ 
    public function setUuid(int $uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get the value of dexId
     *
     * @return  int
     */ 
    public function getDexId()
    {
        return $this->dexId;
    }

    /**
     * Set the value of dexId
     *
     * @param  int  $dexId
     *
     * @return  self
     */ 
    public function setDexId(int $dexId)
    {
        $this->dexId = $dexId;

        return $this;
    }

    /**
     * Get the value of nickname
     *
     * @return  string
     */ 
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @param  string  $nickname
     *
     * @return  self
     */ 
    public function setNickname(string $nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get the value of isShiny
     *
     * @return  bool
     */ 
    public function getIsShiny()
    {
        return $this->isShiny;
    }

    /**
     * Set the value of isShiny
     *
     * @param  bool  $isShiny
     *
     * @return  self
     */ 
    public function setIsShiny(bool $isShiny)
    {
        $this->isShiny = $isShiny;

        return $this;
    }

    /**
     * Get the value of cp
     *
     * @return  int
     */ 
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @param  int  $cp
     *
     * @return  self
     */ 
    public function setCp(int $cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of currentLevel
     *
     * @return  int
     */ 
    public function getCurrentLevel()
    {
        return $this->currentLevel;
    }

    /**
     * Set the value of currentLevel
     *
     * @param  int  $currentLevel
     *
     * @return  self
     */ 
    public function setCurrentLevel(int $currentLevel)
    {
        $this->currentLevel = $currentLevel;

        return $this;
    }

    /**
     * Get the value of locationId
     *
     * @return  int
     */ 
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set the value of locationId
     *
     * @param  int  $locationId
     *
     * @return  self
     */ 
    public function setLocationId(int $locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get the value of trainerId
     *
     * @return  int
     */ 
    public function getTrainerId()
    {
        return $this->trainerId;
    }

    /**
     * Set the value of trainerId
     *
     * @param  int  $trainerId
     *
     * @return  self
     */ 
    public function setTrainerId(int $trainerId)
    {
        $this->trainerId = $trainerId;

        return $this;
    }

    /**
     * Get the value of isArchived
     *
     * @return  bool
     */ 
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    /**
     * Set the value of isArchived
     *
     * @param  bool  $isArchived
     *
     * @return  self
     */ 
    public function setIsArchived(bool $isArchived)
    {
        $this->isArchived = $isArchived;

        return $this;
    }
}
