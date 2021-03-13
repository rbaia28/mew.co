<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TradeHistory
 *
 * @ORM\Table(name="trade_history")
 * @ORM\Entity
 */
class TradeHistory
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
     * @var int
     *
     * @ORM\Column(name="pokemon_id", type="integer", nullable=false)
     */
    private $pokemonId;


}
