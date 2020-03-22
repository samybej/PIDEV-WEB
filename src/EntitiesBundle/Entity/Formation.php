<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=40, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=40, nullable=false)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=20, nullable=false)
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_place", type="integer", nullable=true)
     */
    private $nbrPlace;


}

