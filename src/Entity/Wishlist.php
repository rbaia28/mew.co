<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wishlist
 *
 * @ORM\Table(name="wishlist")
 * @ORM\Entity
 */
class Wishlist
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
     * @ORM\Column(name="trainer_uuid", type="integer", nullable=false)
     */
    private $trainerUuid;

    /**
     * @var int
     *
     * @ORM\Column(name="pokemin_id", type="integer", nullable=false)
     */
    private $pokeminId;

    /**
     * @var bool
     *
     * @ORM\Column(name="completed", type="boolean", nullable=false)
     */
    private $completed = '0';


}
