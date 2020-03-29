<?php

namespace EntitiesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meuble
 *
 * @ORM\Table(name="meuble", indexes={@ORM\Index(name="FK_meuble_reservation", columns={"id_reservation"})})
 * @ORM\Entity
 */
class Meuble
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
     * @ORM\Column(name="taille", type="string", length=50, nullable=false)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \Reservation
     *
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reservation", referencedColumnName="id")
     * })
     */
    private $idReservation;

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
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param string $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return \Reservation
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @param \Reservation $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }




}

