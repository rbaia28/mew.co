<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaidChat
 *
 * @ORM\Table(name="raid_chat")
 * @ORM\Entity
 */
class RaidChat
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
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=false)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="owner_uuid", type="integer", nullable=false)
     */
    private $ownerUuid;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_method", type="string", length=50, nullable=false)
     */
    private $contactMethod;


}
