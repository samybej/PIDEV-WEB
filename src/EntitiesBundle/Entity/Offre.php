<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="id_offreur", columns={"id_offreur"}), @ORM\Index(name="id_client", columns={"id_client"})})
 * @ORM\Entity(repositoryClass="CovoiturageBundle\Repository\CovoiturageRepository")
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
     * @Assert\Regex("/^([1-4])$/")
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
     * @Assert\GreaterThanOrEqual(
     *     value ="today",
     *     message = "Saisir une date > = la date d ' aujourdhui !!"
     * )
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
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=true,
     *     message="Tarif invalide"
     * )
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
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idClient;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offreur", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $idOffreur;
    /**
     * @ORM\OneToOne(targetEntity="Type",mappedBy="idOffre")
     */
    private $type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * @param int $nbPlace
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;
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
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
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
     * @return string
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param string $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return string
     */
    public function getBagage()
    {
        return $this->bagage;
    }

    /**
     * @param string $bagage
     */
    public function setBagage($bagage)
    {
        $this->bagage = $bagage;
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

    /**
     * @return \Client
     */
    public function getIdOffreur()
    {
        return $this->idOffreur;
    }

    /**
     * @param \Client $idOffreur
     */
    public function setIdOffreur($idOffreur)
    {
        $this->idOffreur = $idOffreur;
    }

    public function __toString()
    {
        return (string)$this->id;
    }


    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



}

