<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=30, nullable=false)
     */
    private $immatriculation;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_assurance", type="integer", nullable=false)
     */
    private $numeroAssurance;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=20, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat = '1';


}

