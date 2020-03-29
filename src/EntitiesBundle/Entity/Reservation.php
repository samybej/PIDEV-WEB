<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_chauffeur", columns={"id_chauffeur"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity
 */
class Reservation
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
     * @var float
     *
     * @ORM\Column(name="distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="depart", type="string", length=50, nullable=false)
     */
    private $depart;

    /**
     * @var string
     *
     * @ORM\Column(name="arrive", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat = '1';

    /**
     * @var \Chauffeur
     *
     * @ORM\ManyToOne(targetEntity="Chauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chauffeur", referencedColumnName="id")
     * })
     */
    private $idChauffeur;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * @param string $depart
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;
    }

    /**
     * @return string
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * @param string $arrive
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param float $tarif
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return \Chauffeur
     */
    public function getIdChauffeur()
    {
        return $this->idChauffeur;
    }

    /**
     * @param \Chauffeur $idChauffeur
     */
    public function setIdChauffeur($idChauffeur)
    {
        $this->idChauffeur = $idChauffeur;
    }

    /**
     * @return \Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param \Client $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }




}

