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


}
