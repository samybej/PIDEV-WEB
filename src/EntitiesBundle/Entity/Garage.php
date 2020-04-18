<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Garage
 *
 * @ORM\Table(name="garage")
 * @ORM\Entity(repositoryClass="EntitiesBundle\Repository\GarageRepository")
 */
class Garage
{


    /**
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Vehicule")
     * @ORM\JoinColumn(name="id_vehicule", referencedColumnName="id")
     */
    private $vehicule;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_in", type="date")
     */
    private $dateIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_out", type="date", nullable=true)
     */
    private $dateOut;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=30)
     */
    private $etat;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     *
     * @return Garage
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;
        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set dateOut
     *
     * @param \DateTime $dateOut
     *
     * @return Garage
     */
    public function setDateOut($dateOut)
    {
        $this->dateOut = $dateOut;
    
        return $this;
    }

    /**
     * Get dateOut
     *
     * @return \DateTime
     */
    public function getDateOut()
    {
        return $this->dateOut;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Garage
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule)
    {
        $this->vehicule = $vehicule;
    }

    public function __construct()
    {
        $this->setDateIn(new \DateTime('now'));
    }





}

