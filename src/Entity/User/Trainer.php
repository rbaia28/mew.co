<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer")
 * @ORM\Entity
 */
class Trainer
{
    /**
     * @var int
     *
     * @ORM\Column(name="uuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uuid;

    /**
     * @var string
     *
     * @ORM\Column(name="trainer_name", type="string", length=30, nullable=false)
     */
    private $trainerName;

    /**
     * @var string
     *
     * @ORM\Column(name="friend_code", type="string", length=12, nullable=false)
     */
    private $friendCode;

    /**
     * @var int
     *
     * @ORM\Column(name="team_id", type="integer", nullable=false)
     */
    private $teamId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_method", type="string", length=30, nullable=true)
     */
    private $contactMethod;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_id", type="integer", nullable=true)
     */
    private $locationId;


}
