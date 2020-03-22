<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="id_offreur", columns={"id_offreur"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Offre
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
     * @var integer
     *
     * @ORM\Column(name="nb_place", type="integer", nullable=false)
     */
    private $nbPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=40, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrive", type="string", length=40, nullable=false)
     */
    private $arrive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=20, nullable=false)
     */
    private $time;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="vehicule", type="string", length=30, nullable=false)
     */
    private $vehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="bagage", type="string", length=20, nullable=false)
     */
    private $bagage;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     * })
     */
    private $idClient;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offreur", referencedColumnName="id")
     * })
     */
    private $idOffreur;


}

