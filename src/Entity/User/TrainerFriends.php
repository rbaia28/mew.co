<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrainerFriends
 *
 * @ORM\Table(name="trainer_friends")
 * @ORM\Entity
 */
class TrainerFriends
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
     * @ORM\Column(name="trainer_1_id", type="integer", nullable=false)
     */
    private $trainer1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="trainer_2_id", type="integer", nullable=false)
     */
    private $trainer2Id;

    /**
     * @var float
     *
     * @ORM\Column(name="friend_level", type="float", precision=10, scale=0, nullable=false, options={"default"="1"})
     */
    private $friendLevel = 1;


}
