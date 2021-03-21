<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactMethod
 *
 * @ORM\Table(name="contact_method")
 * @ORM\Entity
 */
class ContactMethod
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
     * @ORM\Column(name="method", type="string", length=50, nullable=false)
     */
    private $method;


}
